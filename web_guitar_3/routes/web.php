<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/getAllProductByLaratable','ProductController@getAllProductByLaratable');

Route::get('/getAllProduct','ProductController@getAllProduct');

Route::get('/admin/viewAllProduct',function (){
    return view('admin/manageProduct');
});

Route::get('/getAllUser','UserController@getAllUser');

Route::get('/admin/viewAllUser',function (){
    return view('admin/manageUser');
});


Route::get('/home', 'ProductController@getAllProduct');
Route::get('/', 'ProductController@getAllProduct');

Route::get('/admin', function () {
    return view('auth/login');
});
//
//
Route::get('/admin/home', function (){
   return view('/admin/homeAdmin');
});


Route::get('/admin/new-user',function(){
    return view('/admin/newUser');
});

Route::get('/admin/new-product',function(){
    return view('/admin/newProduct');
});

Route::get('/yourCart',function(){
    return view('/user/yourCartPage');
});

Route::post('/admin/createUser','UserController@createNewUser');
Route::post('/admin/createProduct','ProductController@createNewProduct');
//
//
//
Route::get('/getAllCategory','CategoryController@getAllCategory');
Route::get('/getCategoryByIdAjax','CategoryController@getCategoryByIdAjax');


Route::get('/detail-product-id={id}','ProductController@getProductById');
Route::get('/getProductByIdAjax','ProductController@getProductByIdAjax');
//
//


//upload file
Route::get('file','FileController@index');
Route::post('file','Filecontroller@doUpload')->name('uploadFile');


Route::get('/admin/update-product-id={id}','ProductController@updateProductById');
Route::get('/admin/adjust-product-id={id}','ProductController@getProductByIdToAjust');
Route::get('/admin/remove-product-id={id}','ProductController@removeProductById');

//Route::post('/createProduct','ProductController@createNewProduct');
//
Route::get('/getProductByIdCategory={id}','ProductController@getProductByCategory');

//
//Route::get('/new-product',function(){
//    return view('/pages/detailProduct');
//});

//Route::get('/home', 'UserController@getUserById')->name('home');

//
//Route::get('/home', 'HomeController@index')->name('home');
//
////user
////Route::get('/manageUser', 'UserController@getAllUser');
//Route::get('/manageUserByAjax', 'UserController@getAllUserByAjax');
//Route::get('/adjust-user-id={id}','UserController@getUserById');
////
////Route::get('/new-user',function(){
////    return view('/admin/detailUser');
////});
//

//Route::post('/updateUser','UserController@updateUser');
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
