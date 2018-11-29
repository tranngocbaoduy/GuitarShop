<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//use Request;
use Illuminate\Support\Facades\Input;
class FileController extends Controller
{
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function index(){
        return view('DemoUpload');
    }

    public function doUpload(Request $request){
        //xử lý upload ở đây
        if($request->hasfile('image-product'))
        {
            $folderdirection = 'uploads/';
            $file = $request->file('image-product');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'_'.$filename;
            $file->move($folderdirection, $filename);

            $msg = array(
                'status' => true,
                'message' => 'Upload File Success'
            );
            return response()->json($msg);
        }
        $msg = array(
            'status' => false,
            'message' => 'Upload File Failed',
        );
        return response()->json($msg);
    }
}
