<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductInfo;
use Illuminate\Http\Request;
use App\Bill;
use App\CustomerInfo;
use App\Token;

class BillController extends Controller
{
    //
    public const length = 10;

    public function getToken($length){
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[random_int(0, $max-1)];
        }
        return $token;
    }

    public function createBill(Request $request)
    {

        $token = BillController::getToken(10);

        $dataUser = $request->dataUser;
        $dataProduct = $request->dataProduct;

        $customer = new CustomerInfo;

//        Luu thong tin customer info
        $customer->name = $dataUser['name'];
        $customer->email = $dataUser['email'];
        $customer->address = $dataUser['address'];
        $customer->phone = $dataUser['phone'];
        $customer->country = $dataUser['country'];
        $customer->cardName = $dataUser['cardName'];
        $customer->cardNumber = $dataUser['cardNumber'];
        $customer->remember_token = $token;
        $checkCreateCustomer = $customer->save();

        if(!$checkCreateCustomer){
            $msg = array(
                'status' => false,
                'message' => 'Create Info Customer Failed',
            );
            return response()->json($msg);
        }

        $newBill = new Bill;
        $newBill->total = $dataProduct['total'];
        $newBill->time = time();
        $newBill->id_customer_info = $customer->id;
        $checkCreateBill = $newBill->save();

        if(!$checkCreateBill){
            $msg = array(
                'status' => false,
                'message' => 'Create Bill Failed',
            );
            return response()->json($msg);
        }

        $listProductInfo = [];
//
        for ($i = 0; $i < count($dataProduct['product']); $i++) {
            $productInfo = new ProductInfo;
            $product = Product::where('id', $dataProduct['product'][$i]['id'])->get();
            if (count($product) != 1) {
                $msg = array(
                    'status' => false,
                    'message' => 'Get Product By Id Failed',
                );
                return response()->json($msg);
            }
//
            $quantityCustomerBuy = $dataProduct['product'][$i]['quantity'];

            $productInfo->name = $product[0]->name;
            $productInfo->quantity = $quantityCustomerBuy;
            $product[0]->quantity =  $product[0]->quantity - $quantityCustomerBuy;

            //change quantity of product
            $product[0]->save();

            $productInfo->price = $product[0]->price;
            $productInfo->id_bill = $newBill->id;
            $checkCreateProductInfo = $productInfo->save();
//
            if(!$checkCreateProductInfo){
                $msg = array(
                    'status' => false,
                    'message' => 'Create Info Product Failed',
                );
                return response()->json($msg);
            }

            $listProductInfo[] = $productInfo;
        }


        $msg = array(
            'status' => true,
            'message' => 'Create Bill Successful',
            'bill'=> $newBill,
            'customer'=> $customer,
            'listProductInfo' => $listProductInfo,
            'token' => $token,
        );
        return response()->json($msg);
    }

}
