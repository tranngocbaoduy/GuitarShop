<?php

namespace App\Http\Controllers;

use App\BestSeller;
use App\Customer;
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

    public function getInfoUserPayment(Request $request)
    {
        $token = $request->token;

        $customers = Customer::where('remember_token', $token)->get();

        if (count($customers) != 1) {
            $msg = array(
                'status' => false,
                'message' => 'Get Info Customer Failed',
            );
            return response()->json($msg);
        }

        $msg = array(
            'status' => true,
            'message' => 'Get Info Product Success',
            'customer' => $customers[0],
        );
        return response()->json($msg);
    }

    public function getInfoOrder(Request $request)
    {
        $token = $request->token;

        $customers = Customer::where('remember_token', $token)->get();

        if (count($customers) != 1) {
            $msg = array(
                'status' => false,
                'message' => 'Get Info Customer Failed',
            );
            return response()->json($msg);
        }
//
        $billOfCustomer = Bill::where('id_customer',$customers[0]->id)->orderBy('id', 'desc')->get();
        if (count($billOfCustomer) <= 0) {
            $msg = array(
                'status' => false,
                'message' => 'Get Bill Failed',
            );
            return response()->json($msg);
        }
        $listProductOrdered = [];

        for($i = 0 ; $i< count($billOfCustomer);$i++) {
            $productOrdered = ProductInfo::where('id_bill',$billOfCustomer[$i]->id)->get();
            $listProductOrdered[] = $productOrdered;
        }

        $msg = array(
            'status' => true,
            'message' => 'Get Info Product Success',
            'listProductOrdered' => $listProductOrdered,
        );
        return response()->json($msg);
    }

    public function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[random_int(0, $max - 1)];
        }
        return $token;
    }

    public function createBill(Request $request)
    {

        $tokenBill = BillController::getToken(10);

        $dataUser = $request->dataUser;
        $dataProduct = $request->dataProduct;

        $tokenCustomer = $dataUser['tokenCustomer'];
        // create Bill
        $newBill = new Bill;
        $newBill->total = $dataProduct['total'];

        //check Customer exist to add bill for customer
        if ($tokenCustomer != '') {
            $customers = Customer::where('remember_token',$tokenCustomer)->get();

            if (count($customers)!=1) {
                $msg = array(
                    'status' => false,
                    'message' => 'Exist Customer But Not Add Bill For Customer',
                );
                return response()->json($msg);
            }
            $newBill->id_customer = $customers[0]->id;
        }

        $customerInfo = new CustomerInfo;
//        Luu thong tin customer info
        $customerInfo->name = $dataUser['name'];
        $customerInfo->email = $dataUser['email'];
        $customerInfo->address = $dataUser['address'];
        $customerInfo->phone = $dataUser['phone'];
        $customerInfo->country = $dataUser['country'];
        $customerInfo->cardName = $dataUser['cardName'];
        $customerInfo->cardNumber = $dataUser['cardNumber'];
        $customerInfo->remember_token = $tokenBill;
        $checkCreateCustomer = $customerInfo->save();


        if (!$checkCreateCustomer) {
            $customerInfo->delete();
            $msg = array(
                'status' => false,
                'message' => 'Create Info Customer Failed',
            );
            return response()->json($msg);
        }


        $newBill->time = time();
        $newBill->id_customer_info = $customerInfo->id;
        $checkCreateBill = $newBill->save();

        if (!$checkCreateBill) {
            $newBill->delete();
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

            $productInfo->id_product = $dataProduct['product'][$i]['id'];
            $productInfo->name = $product[0]->name;
            $productInfo->image = $product[0]->image;
            $productInfo->quantity = $quantityCustomerBuy;

            $product[0]->quantity = $product[0]->quantity - $quantityCustomerBuy; //set quantity
            $product[0]->hottest = $product[0]->hottest + 1; // set best sell

            //change quantity and level hot of product
            $product[0]->save();

            $productInfo->price = $product[0]->price;
            $productInfo->id_bill = $newBill->id;
            $checkCreateProductInfo = $productInfo->save();
//
            if (!$checkCreateProductInfo) {
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
            'message' => 'Create Bill Success',
            'bill' => $newBill,
            'customer' => $customerInfo,
            'listProductInfo' => $listProductInfo,
            'token' => $tokenBill,
        );
        return response()->json($msg);
    }

}
