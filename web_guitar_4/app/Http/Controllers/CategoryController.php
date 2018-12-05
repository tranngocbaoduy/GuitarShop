<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public function getAllCategory()
    {
        $categories = Category::all();
        if (count($categories) == 0) {
            return view('error/404');
        }
        $msg = array(
            'status'=> true,
            'message'=> 'Get Category Successful',
            'categories' => $categories
        );
        return response()->json($msg);
    }


    public function getCategoryByIdAjax(Request $request)
    {
        $categories = Category::where('id', $request->id)->get();
        if (count($categories) != 1) {
            $msg = array(
                'status' => false,
                'message' =>  'Get Category By Id Failed',

            );
            return response()->json($msg);
        }
        $msg = array(
            'status' => true,
            'message' => 'Get Category By Id Success',
            'category' => $categories[0]
        );
        return response()->json($msg);
    }
}
