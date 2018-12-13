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
        $currentTime= time();
        if($request->hasfile('image-product'))
        {
            $folderDirection = 'uploads/';
            $file = $request->file('image-product');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =$currentTime.'_'.$filename;
            $file->move($folderDirection, $filename);

            $msg = array(
                'status' => true,
                'message' => 'Upload File Success',
                'currentTimeCreated' => $currentTime,
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
