<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'User\UserController@Welcome');
Route::get('/pagination/fetch_data', 'User\UserController@WelcomeAjax');

Auth::routes();

Route::get('adminlogin', 'Admin\AdminController@showLoginForm');
Route::get('/your-email', 'Auth\ResetPasswordController@email');
Route::post('/send-email', 'Auth\ResetPasswordController@SendEmail');
Route::get('/confirm-reset-email/{token}','Auth\ResetPasswordController@confirm');
Route::get('/reset-your-password', 'Auth\ResetPasswordController@reset');
Route::post('/reset/password', 'Auth\ResetPasswordController@resetPassword');
Route::post('loginrr', 'Admin\AdminController@authenticate');
Route::get('logout', 'Admin\AdminController@logout');
Route::get('/contact', 'User\UserController@contactUs');
Route::post('/contact', 'User\UserController@sendContactMessage');
Route::get('/basket', 'User\UserController@getBasket');
Route::post('/add-basket', 'User\UserController@addBasket');
Route::post('/add-heart', 'User\UserController@addHeart');
Route::get('/about', 'User\UserController@aboutUs');
Route::get('/product/{id}', 'User\UserController@product');

//language route
Route::post('/language-chooser', 'LanguageController@changeLanguage');
Route::post('/language',array(
        'before' => 'csrf',
        'as'=>'language-chooser',
        'uses'=>'LanguageController@changeLanguage'
    )
);

Route::group(['prefix' => 'admin/', 'middleware' => ['admin']], function () {

    Route::get('dashboard', ['uses' => 'Admin\AdminController@show', 'as' => 'admin_index']);


    // Service
    Route::get('add/category', ['uses' => 'Admin\AppController@categoryForm', 'as'=>'category']);
    Route::post('add/addcategory', ['uses' => 'Admin\AppController@addCategory', 'as'=>'addcategory']);
    Route::get('categorys', ['uses' => 'Admin\AppController@allCategory', 'as'=>'allcategory']);
    Route::get('category/editform/{id}', ['uses' => 'Admin\AppController@editCategoryForm', 'as'=>'category_edit_form']);
    Route::post('category_edit/edit/{id}', ['uses' => 'Admin\AppController@editCategory', 'as'=>'category_edit']);
    Route::get('category/delete/{id}', ['uses' => 'Admin\AppController@deleteCategory', 'as'=>'category_delete']);


    //Sub Service
    Route::get('add/subcategory', ['uses' => 'Admin\AppController@subCategoryForm', 'as'=>'subcategory']);
    Route::post('add/addsubcategory', ['uses' => 'Admin\AppController@addSubCategory', 'as'=>'addsubcategory']);
    Route::get('subcategory', ['uses' => 'Admin\AppController@allSubCategory', 'as'=>'allsubcategory']);
    Route::get('all/subcategory', ['uses' => 'Admin\AppController@anyDataSub', 'as'=>'allSubCategory.data']);
    Route::get('subcategory/editform/{id}', ['uses' => 'Admin\AppController@editSubCategoryForm', 'as'=>'subcategory_edit_form']);
    Route::post('subcategory/edit/{id}', ['uses' => 'Admin\AppController@editSubCategory', 'as'=>'subcategory_edit']);
    Route::get('subcategory/delete/{id}', ['uses' => 'Admin\AppController@deleteSubCategory', 'as'=>'subcategory_delete']);

    //Products
    Route::get('add/product', ['uses' => 'Admin\AppController@productForm', 'as'=>'product']);
    Route::post('add/product', ['uses' => 'Admin\AppController@addProduct', 'as'=>'addproduct']);
    Route::get('products', ['uses' => 'Admin\AppController@allProducts', 'as'=>'allproducts']);
    Route::get('product/editform/{id}', ['uses' => 'Admin\AppController@editProductForm', 'as'=>'product_edit_form']);
    Route::post('product/edit/{id}', ['uses' => 'Admin\AppController@editProduct', 'as'=>'product_edit']);
    Route::get('product/delete/{id}', ['uses' => 'Admin\AppController@deleteProduct', 'as'=>'product_delete']);

    // Brand

    Route::get('add/brand', ['uses' => 'Admin\AppController@brandForm', 'as'=>'brand']);
    Route::post('add/brand', ['uses' => 'Admin\AppController@addBrand', 'as'=>'addbrand']);
    Route::get('brands', ['uses' => 'Admin\AppController@allBrands', 'as'=>'allbrands']);
    Route::get('brand/delete/{id}', ['uses' => 'Admin\AppController@deleteBrand', 'as'=>'brand_delete']);

    // Color

    Route::get('add/color', ['uses' => 'Admin\AppController@colorForm', 'as'=>'color']);
    Route::post('add/color', ['uses' => 'Admin\AppController@addColor', 'as'=>'addcolor']);
    Route::get('colors', ['uses' => 'Admin\AppController@allColors', 'as'=>'allcolors']);
    Route::get('color/delete/{id}', ['uses' => 'Admin\AppController@deleteColor', 'as'=>'color_delete']);

    // Type Belt

    Route::get('add/belt', ['uses' => 'Admin\AppController@beltForm', 'as'=>'belt']);
    Route::post('add/belt', ['uses' => 'Admin\AppController@addBelt', 'as'=>'addbelt']);
    Route::get('belts', ['uses' => 'Admin\AppController@allBelts', 'as'=>'allbelts']);
    Route::get('belt/delete/{id}', ['uses' => 'Admin\AppController@deleteBelt', 'as'=>'belt_delete']);


});