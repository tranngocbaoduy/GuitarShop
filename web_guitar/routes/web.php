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
Route::get('/getProductByGroupIdAjax','ProductController@getProductByGroupIdAjax');
Route::get('/admin/viewAllProduct',function (){
    return view('admin/manageProduct');
});

Route::get('/getAllCustomerByLaratable','CustomerController@getAllCustomerByLaratable')->name('getAllCustomer');

Route::get('/admin/viewAllCustomer',function (){
    return view('admin/manageCustomer');
});


Route::get('/home', 'ProductController@getAllProduct');
Route::get('/', 'ProductController@getAllProduct');
Route::get('/getBestSeller', 'ProductController@getBestSellerMore');
Route::get('/getProductSameCategoryMore', 'ProductController@getProductSameCategoryMore');
//
Route::get('/admin', function () {
    return view('auth/login');
});
//
//
Route::get('/admin/home', function (){
   return view('/admin/homeAdmin');
});

Route::get('/payment', function () {
    return view('/user/payment');
});

Route::get('/contact', function () {
    return view('/user/contactPage');
});

//Route::get('/login', function () {
//    return view('/user/login');
//});
Route::get('/payment', function () {
    return view('/user/paymentPage');
});

Route::get('/admin/new-customer',function(){
    return view('/admin/newCustomer');
});

Route::get('/admin/new-product',function(){
    return view('/admin/newProduct');
});

Route::get('/yourCart',function(){
    return view('/user/yourCartPage');
});

//Route::post('/admin/createUser','UserController@createNewUser');
Route::post('/admin/createProduct','ProductController@createNewProduct');
//
//
//
Route::get('/getAllCategory','CategoryController@getAllCategory');
Route::get('/getAllBrand','BrandController@getAllBrand');
Route::get('/getCategoryByIdAjax','CategoryController@getCategoryByIdAjax');
Route::get('/getBrandByIdAjax','BrandController@getBrandByIdAjax');

Route::get('/getProductByCategoryMore','ProductController@getProductByCategoryMore');


Route::get('/detail-product-id={id}','ProductController@getProductById');
//Route::post('/detail-product-id'={},'ProductController@getProductById');
Route::get('/getProductByIdAjax','ProductController@getProductByIdAjax');


//send email
Route::post('/addFeedback','ContactController@addFeedback');
//
//

//upload file
Route::get('file','FileController@index');
Route::post('file','Filecontroller@doUpload')->name('uploadFile');


Route::post('/updateProductById','ProductController@updateProductById');
Route::get('/adjust-product-id={id}','ProductController@getProductByIdToAjust');
Route::get('/remove-product-id={id}','ProductController@removeProductById');


//Route::post('/updateProductById','ProductController@updateProductById');
Route::get('/adjust-customer-id={id}','CustomerController@getCustomerById');
//Route::get('/remove-product-id={id}','ProductController@removeProductById');

//Route::post('/createProduct','ProductController@createNewProduct');
//
Route::get('/getProductByIdCategory={id}','ProductController@getProductByIdCategory');
Route::get('/getProductByIdBrand={id}','ProductController@getProductByIdBrand');

//search Auto Complete
Route::get('/searchAutoComplete','ProductController@searchAutoComplete');

//Route::get("/searchAutoComplete",array('as'=>'searchAutoComplete','uses'=> 'ProductController@searchAutoComplete'));

Route::get('/userLogin',function (){
    return view("user/loginPage");
});
Route::get('/userSignUp',function (){
    return view("user/signUpPage");
});

Route::get('/signUp',function (){
    return view("user/signUpPage");
});
Route::post('/customerSignUp', "CustomerController@createCustomerAccount");
Route::post('/customerLogin', "CustomerController@loginCustomer");

Route::post('/checkLogin', "CustomerController@checkLogin");

// create bill

Route::post('/createBill','BillController@createBill')->name('createBill');
Route::post('/getInfoUserPayment','BillController@getInfoUserPayment');

// manage Account Customer
Route::get('/myAccount',function (){
   return view('user/manageAccount');
});

Route::get('/myOrder',function (){
    return view('user/myOrder');
});

Route::get('/ajustAccount',function (){
   return view('user/ajustAccountCustomer');
});

Route::post('/updateCustomer','CustomerController@updateCustomer');
Route::post('/getInfoOrder','BillController@getInfoOrder');

//
//Route::get('/new-product',function(){
//    return view('/pages/detailProduct');
//});

//Route::get('/home', 'UserController@getUserById')->name('home');

//
//Route::get('/home', 'HomeController@index')->name('home');
//
////user
////Route::get('/manageCustomer', 'UserController@getAllUser');
//Route::get('/manageCustomerByAjax', 'UserController@getAllUserByAjax');
//Route::get('/adjust-user-id={id}','UserController@getUserById');
////
////Route::get('/new-customer',function(){
////    return view('/admin/detailUser');
////});
//

//Route::post('/updateUser','UserController@updateUser');
Auth::routes();
//
Route::get('/admin', 'HomeController@index')->name('home');
