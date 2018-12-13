<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function getAllBrand()
    {
        $brands = Brand::all();
        if (count($brands) == 0) {
            $msg = array(
                'status'=> false,
                'message'=> 'Get Brand Failed',
            );
            return response()->json($msg);
        }
        $msg = array(
            'status'=> true,
            'message'=> 'Get Brand Successful',
            'brands' => $brands
        );
        return response()->json($msg);
    }


    public function getBrandByIdAjax(Request $request)
    {
        $brands = Brand::where('id', $request->id)->get();
        if (count($brands) != 1) {
            $msg = array(
                'status' => false,
                'message' =>  'Get Brand By Id Failed',

            );
            return response()->json($msg);
        }
        $msg = array(
            'status' => true,
            'message' => 'Get Brand By Id Success',
            'brand' => $brands[0]
        );
        return response()->json($msg);
    }
}
