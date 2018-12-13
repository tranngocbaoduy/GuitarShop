<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\ProductInfo;
use Illuminate\Http\Request;
use App\Product;
use Freshbitsweb\Laratables\Laratables;
use function Sodium\add;


class ProductController extends Controller
{
    //

    public function getAllProductByLaratable(){

       return Laratables::recordsOf(Product::class);
    }


    public function getCustomColumnDatatablesData()
    {
        return Laratables::recordsOf(Product::class);
    }

    public function getAllProduct()
    {
        $products = Product::all()->take(4);
        if (count($products) <= 0) {
            return view('error/404');
        }
        //get best seller
        $productBestSellers = Product::orderBy('hottest', 'desc')->take(4)->get();

        return view('/home', ['products' => $products],['productBestSells'=>$productBestSellers]);
    }

    public function searchAutoComplete(Request $request){

        $term=$request->term;
        $data=Product::where('name','like','%'.$term.'%')->take(10)->get();

        $result= array();
        foreach ($data as $item) {

            $result[]=['id'=>$item->id,'name'=>$item->name,'image'=>$item->image];

        }

        return response()->json($result);
    }

    public function getProductById(Request $request)
    {
        $product = Product::where('id', $request->id)->get();
        if (count($product) != 1) {
            return view('error/404');
        }
//      get product same kind except this product
        $productSameCategory = Product::where('id_category',$product[0]->id_category)->where('id','<>',$product[0]->id)->take(4)->get();

        return view('/user/productDetailPage', ['product' => $product[0]],['productSameCategory'=>$productSameCategory]);
    }

    public function getProductByIdAjax(Request $request)
    {
        $products = Product::where('id', $request->id)->get();
        if (count($products) != 1) {
            $msg = array(
                'status' => false,
                'message' =>  'Get Product By Id Failed',

            );
            return response()->json($msg);
        }

        $msg = array(
            'status' => true,
            'message' => 'Get Product By Id Success',
            'product' => $products[0],
        );
        return response()->json($msg);
    }

    public function getProductByGroupIdAjax(Request $request)
    {
        $yourCartId = $request->groupProductId;
        $productGroup = [];
        for($i = 0 ; $i < count($yourCartId);$i++){
            $products = Product::where('id', $yourCartId[$i])->get();
            if (count($products) != 1) {
                $msg = array(
                    'status' => false,
                    'message' =>  'Get Group Product By Group Id Failed',
                );
                return response()->json($msg);
            }
            $productGroup[] = $products[0];
        }

        $msg = array(
            'status' => true,
            'message' => 'Get Group Product By Group Id Success',
            'info'=> $request->id,
            'productGroup' => $productGroup
        );
        return response()->json($msg);
    }

    public function getProductByIdToAjust(Request $request)
    {
        $product = Product::where('id', $request->id)->get();
        if (count($product) != 1) {
            return view('error/404');
        }
        return view('/admin/detailProduct', ['product' => $product[0]]);
    }

    public function getProductByIdCategory(Request $request)
    {
        $idCate = $request->id;
        //get best seller
        $productBestSellers = Product::orderBy('hottest', 'desc')->take(4)->get();
        if($idCate !=0) {
            $products = Product::where('id_category', $idCate)->take(9)->get();
            $cate = Category::where('id',$idCate)->get();
        }else{
            $products = Product::all();
            $msg = array(
                'status' => true,
                'message' => 'Get Product By Category Success',
                'products' => $products
            );
            return response()->json($msg);
        }
        if (count($products) < 0) {
            $msg = array(
                'status' => false,
                'message' => 'Get Product By Category Failed'
            );
            return view('error/404');
        }
        $sum = [$products,$productBestSellers];

        return view('/user/product', ['sum' => $sum],['category'=>$cate[0]]);
//
    }

    public function getProductByIdBrand(Request $request)
    {
        $idBrand = $request->id;
        //get best seller
        $productBestSellers = Product::orderBy('hottest', 'desc')->take(4)->get();
        if($idBrand !=0) {
            $products = Product::where('id_brand', $idBrand)->take(9)->get();
            $brands = Brand::where('id',$idBrand)->get();
        }else{
            $products = Product::all();
            $msg = array(
                'status' => true,
                'message' => 'Get Product By Category Success',
                'products' => $products
            );
            return response()->json($msg);
        }
        if (count($products) < 0) {
            $msg = array(
                'status' => false,
                'message' => 'Get Product By Category Failed'
            );
            return view('error/404');
        }
        $sum = [$products,$productBestSellers];

        return view('/user/product', ['sum' => $sum],['category'=>$brands[0]]);
//
    }

    public function getBestSellerMore(Request $request){

        $numberSkip = $request->numberSkip;
        $whatPage = $request->whatPage;
        $numberTake = 0;
        if($whatPage == 'Product'){
            $numberTake = 3;
        }else if($whatPage == 'Home'){
            $numberTake = 4;
        }
        $products = Product::orderBy('hottest', 'desc')->skip($numberSkip)->take($numberTake)->get();

        if($whatPage == 'Product'){
            $numberSkip += 3;
        }else if($whatPage == 'Home'){
            $numberSkip += 4;
        }

        $msg = array(
            'status' => true,
            'message' => 'Get Product By Category Successful',
            'products' => $products,
            'numberSkip'=> $numberSkip,
        );
        return response()->json($msg);

    }

    public function getProductSameCategoryMore(Request $request){
        $idCate = $request->id;
        $numberSkip = $request->numberSkip;
        $whatPage = $request->whatPage;
        $numberTake = 0;
        if($whatPage == 'Product'){
            $numberTake = 3;
        }else if($whatPage == 'Home'){
            $numberTake = 4;
        }
        $products = Product::where('id_category',$idCate)->skip($numberSkip)->take($numberTake)->get();

        if($whatPage == 'Product'){
            $numberSkip += 3;
        }else if($whatPage == 'Home'){
            $numberSkip += 4;
        }

        $msg = array(
            'status' => true,
            'message' => 'Get Product By Category Successful',
            'products' => $products,
            'numberSkip'=> $numberSkip,
        );
        return response()->json($msg);

    }

    public function getProductByCategoryMore(Request $request)
    {
        $idCate = $request->id;
        $numberSkip = $request->numberSkip;
        $whatPage = $request->whatPage;
        $numberTake = 0;
        if($whatPage == 'Product'){
            $numberTake = 3;
        }else if($whatPage == 'Home'){
            $numberTake = 4;
        }
        if($idCate !=0) {
            $products = Product::where('id_category', $idCate)->skip($numberSkip)->take($numberTake)->get();
        }else{
            $products = Product::skip($numberSkip)->take($numberTake)->get();
        }
        if (count($products) <= 0) {
            $msg = array(
                'status' => false,
                'message' => 'Get More Product Failed',
                'count' =>count($products),
            );
            return response()->json($msg);
        }
        if($whatPage == 'Product'){
            $numberSkip += 3;
        }else if($whatPage == 'Home'){
            $numberSkip += 4;
        }
        $msg = array(
            'status' => true,
            'message' => 'Get Product By Category Successful',
            'products' => $products,
            'idCate' =>$idCate,
            'numberSkip'=> $numberSkip,
        );
        return response()->json($msg);

//
    }

    public function removeProductById($id)
    {

        $deteleProduct = Product::where('id', '=', $id)->delete();
        $products = Product::all();
        if (!$deteleProduct) {
            return view('error/404');
        }
        return view('admin.manageProduct', ['products' => $products]);
    }

    public function createNewProduct(Request $request)
    {
        $currentTime = $request->currentTimeCreated;
        $nameProduct = $request->nameProduct;
        $priceProduct = $request->priceProduct;
        $descriptionProduct = $request->descriptionProduct;
        $imageProduct =$currentTime.'_'.$request->imageProduct;
        $path = "<img src=\""."../uploads/".$imageProduct."\" alt=\"Avatar\" style=\"width:50%\">";
        $quantityProduct = $request->quantityProduct;
        $categoryProduct = $request->cateProduct;


//        create image in FileController

//        if($request->hasfile('image-product'))
//        {
//            $folderdirection = 'uploads/';
//            $file = $request->file('image-product');
//            $filename = $file->getClientOriginalName();
//            $extension = $file->getClientOriginalExtension(); // getting image extension
//            $filename =$currentTime.'_'.$filename;
//            $file->move($folderdirection, $filename);
////            echo "<img src='".$folderdirection.$filename."'>";
//        }else{
//            $msg = array(
//                'status' => false,
//                'message' => 'Upload Image Failed'
//            );
//            return response()->json($msg);
//        }

        #check product exist
        $exist = Product::where('name', $nameProduct)->get();
        if ($exist->count() >=1) {
            $msg = array(
                'status' => false,
                'message' => 'Conflict Name Product. Create Failed'
            );
            return response()->json($msg);
        }
        //        create new product

        $product = new Product;
        $product->name = $nameProduct;
        $product->price = $priceProduct;
        $product->description = $descriptionProduct;
        $product->image = $imageProduct;
        $product->quantity = $quantityProduct;
        $product->id_category = $categoryProduct;
        $product->path = $path;

        $product->save();
        // create button edit
        $product->action =  "<a class=\"btn btn-warning edit-product\" href=\"/adjust-product-id=".$product->id."\">Edit</a>";

        $product->save();

        $msg = array(
            'status' => true,
            'message' => 'Create Successful',
            'name' => $nameProduct,
            'price' => $priceProduct,
            'des' => $descriptionProduct,
            'image' => $imageProduct,
            'quantity' => $quantityProduct,
            'cate' => $categoryProduct,
            'pathImage' =>$path
        );

        return response()->json($msg);

    }

    public function updateProductById(Request $request)
    {

        $product = Product::where('id', $request->id)->get();
        if (count($product) != 1) {
            $msg = array(
                'status' => false,
                'message' => 'Update Failed',
            );

            return response()->json($msg);
        }

        $product[0]->name = $request->name;
        $product[0]->price = floatval($request->price);
        $product[0]->description = $request->description;
        $product[0]->quantity = $request->quantity;
        $product[0]->save();

        $msg = array(
            'status' => true,
            'message' => 'Update Successful',
            'product' => $product[0],
            'check' => is_float(floatval($request->price))
        );

        return response()->json($msg);

    }

}