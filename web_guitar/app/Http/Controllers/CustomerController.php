<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Freshbitsweb\Laratables\Laratables;
use function Sodium\add;

class CustomerController extends Controller
{
    //

    public const length = 10;

    public function getAllCustomer(){
        return Laratables::recordsOf(Customer::class);
    }
    public function getAllCustomerByLaratable(){

        return Laratables::recordsOf(Customer::class);
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

    function updateCustomer(Request $request){
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;
        $email = $request->email;
        $city = $request->city;

        $customers = Customer::where('email',$email)->get();
        if (count($customers) != 1) {
            $msg = array(
                'status' => false,
                'message' => 'Update Customer Failed',
            );
            return response()->json($msg);
        }
        $customers[0]->name = $name;
        $customers[0]->address = $address;
        $customers[0]->phone = $phone;
        $customers[0]->city = $city;


        $customers[0]->save();
        $msg = array(
            'status' => true,
            'message' => 'Update Customer Success',
        );
        return response()->json($msg);
    }

    public function getCustomerById(Request $request)
    {
        $customers = Customer::where('id', $request->id)->get();
        if (count($customers) != 1) {
            return view('error/404');
        }

        return view('/admin/detailCustomer', ['customer' => $customers[0]]);
    }

    function formatEmail($email)
    {
        $str = '';
        for ($i = 0; $i < strlen($email); $i++) {
            if ($email[$i] == '@') {
                break;
            }
            $str .= $email[$i];
        }
        return $str;
    }

    function checkLogin(Request $request)
    {
        $token = $request->token;
        $customers = Customer::where('remember_token', $token)->get();
        if (count($customers) != 1) {
            $msg = array(
                'status' => false,
                'message' => 'Token isn\'t exist',

            );
            return response()->json($msg);
        }
        $msg = array(
            'status' => true,
            'message' => 'Customer Login Success',
            'customer' => $customers[0],
        );
        return response()->json($msg);
    }


    function loginCustomer(Request $request)
    {

        $email = $request->email;
        $pass = md5($request->password);

        $customers = Customer::where('email', $email)->get();
        if (count($customers) != 1 || $pass != $customers[0]->password) {
            $msg = array(
                'status' => false,
                'message' => 'Email or Password isn\'t correct',

            );
            return response()->json($msg);
        }
        $msg = array(
            'status' => true,
            'message' => 'Customer Login Success',
            'customer' => $customers[0],
            'token' => $customers[0]->remember_token,
        );
        return response()->json($msg);
    }

    public
    function createCustomerAccount(Request $request)
    {
        $email = $request->email;
        $pass = $request->password;
        $rePass = $request->rePass;

        if ($pass != $rePass) {
            $msg = array(
                'status' => false,
                'message' => 'Password isn\'t match.',
            );
            return response()->json($msg);
        }

        $check = Customer::where('email', $email)->get();
        if (count($check) == 1) {
            $msg = array(
                'status' => false,
                'message' => 'Email is exited. Please choose another email',
            );
            return response()->json($msg);
        }
        $token = CustomerController::getToken(15);

        $customer = new Customer;
        $customer->name = CustomerController::formatEmail($email);
        $customer->email = $email;
        $customer->password = md5($pass);
        $customer->remember_token = $token;

        $customer->save();
//      create button edit
        $customer->action =  "<a class=\"btn btn-warning\" href=\"/adjust-customer-id=".$customer->id."\">Edit</a>";
        $customer->save();
//        $yourCartId = $request->groupProductId;
//        $productGroup = [];
//        for($i = 0 ; $i < count($yourCartId);$i++){
//            $products = Product::where('id', $yourCartId[$i])->get();
//            if (count($products) != 1) {
//                $msg = array(
//                    'status' => false,
//                    'message' =>  'Get Group Product By Group Id Failed',
//                );
//                return response()->json($msg);
//            }
//            $productGroup[] = $products[0];
//        }
//
        $msg = array(
            'status' => true,
            'message' => 'Create Customer Success',
            'customer' => $customer
        );
        return response()->json($msg);
    }

}
