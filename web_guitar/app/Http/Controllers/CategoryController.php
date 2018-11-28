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
}
