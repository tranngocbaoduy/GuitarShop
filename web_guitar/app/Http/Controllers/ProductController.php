<?php

namespace App\Http\Controllers;

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
        $products = Product::all();
        if (count($products) <= 0) {
            return view('error/404');
        }
        return view('/home', ['products' => $products]);
    }

    public function getProductById(Request $request)
    {
        $product = Product::where('id', $request->id)->get();
        if (count($product) != 1) {
            return view('error/404');
        }
        return view('/user/productDetailPage', ['product' => $product[0]]);
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
            'info'=> $request->id,
            'product' => $products[0]
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

    public function getProductByCategory(Request $request)
    {
        $idCate = $request->id;
        if($idCate !=0) {
            $products = Product::where('id_category', $idCate)->get();
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
        return view('/user/product', ['products' => $products]);
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
        $path = "<img src="."/admin/uploads/".$imageProduct." alt=\"Avatar\" style=\"width:30%\">";
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
        $product->action =  "<a class=\"btn btn-warning edit-product\" href=\"/admin/adjust-product-id=".$product->id."\">Edit</a>";

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

        $msg = array(
            'status' => true,
            'message' => 'Create Successful',
        );

        return response()->json($msg);

    }

}