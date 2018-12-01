<?php

namespace App\Http\Controllers;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //

    public function getAllUser(){

        return Laratables::recordsOf(User::class);
    }

//    public function getAllUser()
//    {
//        $users = User::all();
//        if(count($users)<=0){
//            return view('error/404');
//        }
//        return view('/admin/manageUser',['users'=>$users]);
//    }

//    public function getUserById(Request $request)
//    {
//        $users = User::where('id', 1)->get();
//        if (count($users) != 1) {
//            return view('error/404');
//        }
//        return view('/admin/detailUser', ['user' => $users[0]]);
//    }

    public function getAllUserByAjax(Request $request)
    {
        $users = User::all();
        if(count($users)<=0){
            return view('error/404');
        }
        $msg = array(
            'status'=> true,
            'message'=>'Get All User Success',
            'users'=>$users
        );
        return response()->json($msg);
    }

    public function updateUser(Request $request)
    {
        $email = $request->emailUser;
        $nameUser = $request->nameUser;
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;

        $exist = User::where('email', $email)->get();

        $user = $exist[0];
        if($user->password != Hash::make($oldPassword)){
            $msg = array(
                'status'=> false,
                'message'=>'Password isn\'t match',
                'user'=>$user
            );
            return response()->json($msg);
        }
        $user->name = $nameUser;
        $user->password = $newPassword;

        $user->save();
        $msg = array(
            'status'=> true,
            'message'=>'Update User Success',
            'user'=>$user
        );
        return response()->json($msg);
    }


    public function createNewUser(Request $request)
    {
        $nameUser = $request->nameUser;
        $emailUser = $request->emailUser;
        $passwordUser = Hash::make($request->passwordUser);
//        $imageUser = $request->imageUser;

        #check user exist
        $exist = User::where('name', $nameUser)->get();
        if ($exist->count() >=1) {
            $msg = array(
                'status' => false,
                'message' => 'Conflict Name User. Create Failed'
            );
            return response()->json($msg);
        }

        $exist = User::where('email', $emailUser)->get();
        if ($exist->count() >=1) {
            $msg = array(
                'status' => false,
                'message' => 'Email is exist. Create Failed'
            );
            return response()->json($msg);
        }
        //        create new user
        $user = new User;
        $user->name = $nameUser;
        $user->email = $emailUser;
        $user->password = $passwordUser;
//        $user->image = $imageUser;

        $user->save();

        $msg = array(
            'status' => true,
            'message' => 'Create Successful',
            'name' => $nameUser,
            'price' => $emailUser,
            'password' => $passwordUser,
        );

        return response()->json($msg);

    }
}
