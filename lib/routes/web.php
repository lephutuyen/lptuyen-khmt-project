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


Route::group(['prefix'=>'/'],function(){
    Route::get('/','FrontendController@getHome');
    Route::get('category/{id}','FrontendController@getInfoByCate');
    Route::get('detail/{id}','FrontendController@getInfoDetail');
    Route::post('detail/{id}','FrontendController@postInfoComment');
    Route::get('search','FrontendController@getSearchInfo');
});

Route::get('detailnckh/{id}','FrontendController@getNCKHDetail');

Route::get('category/{id}/{slug}.html','FrontendController@getCategory');

//Route::get('search','FrontendController@getSearch');

Route::get('/dao-tao','FrontendController@getAbout');

Route::get('/dissertation','FrontendController@getDissertation');

Route::get('/nghien-cuu','FrontendController@getPersional');

Route::get('/danh-muc-minh-chung','FrontendController@getDMMC');

//Route::get('/gioi-thieu','FrontendController@getIntroduce');

Route::group(['prefix'=>'gioi-thieu'],function() {
    Route::get('/', 'FrontendController@getIntroduce');
    Route::get('detail/{id}', 'FrontendController@getNCKHDetail');
});

Route::group(['namespace'=>'Admin'],function()
{
    Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function()
    {
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
        });

    Route::get('logout','HomeController@getLogout');

    Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){

        Route::get('home','HomeController@getHome');

        Route::group(['prefix'=>'category'],function (){
            Route::get('/','CategoryController@getCate');
            Route::post('/','CategoryController@postCate');

            Route::get('edit/{id}','CategoryController@getEditCate');
            Route::post('edit/{id}','CategoryController@postEditCate');

            Route::get('delete/{id}','CategoryController@getDeleteCate');
        });

        Route::group(['prefix'=>'product'],function (){
            Route::get('/','ProductController@getProduct');

            Route::get('add','ProductController@getAddProduct');
            Route::post('add','ProductController@postAddProduct');

            Route::get('edit/{id}','ProductController@getEditProduct');
            Route::post('edit/{id}','ProductController@postEditProduct');

            Route::get('delete/{id}','ProductController@getDeleteProduct');
        });

        Route::group(['prefix'=>'profile'],function(){
            Route::get('/','ProfileController@getProf');

            Route::get('add','ProfileController@getAddProf');
            Route::post('add','ProfileController@postAddProf');

            Route::get('edit/{id}','ProfileController@getEditProf');
            Route::post('edit/{id}','ProfileController@postEditProf');

            Route::get('delete/{id}','ProfileController@getDeleteProf');
        });

        Route::group(['prefix'=>'introduce'],function(){
            Route::get('/','IntroduceController@getIntro');

            Route::get('add','IntroduceController@getAddIntro');
            Route::post('add','IntroduceController@postAddIntro');

            Route::get('edit/{id}','IntroduceController@getEditIntro');
            Route::post('edit/{id}','IntroduceController@postEditIntro');

            Route::get('delete/{id}','IntroduceController@getDeleteIntro');
        });

        Route::group(['prefix'=>'gallery'],function(){
            Route::get('/','GalleryController@getGal');

            Route::get('add','GalleryController@getAddGal');
            Route::post('add','GalleryController@postAddGal');

            Route::get('edit/{id}','GalleryController@getEditGal');
            Route::post('edit/{id}','GalleryController@postEditGal');

            Route::get('delete/{id}','GalleryController@getDeleteGal');
        });

        Route::group(['prefix'=>'dbcl'],function(){
            Route::get('/','DBCLController@getDBCL');

            Route::get('add','DBCLController@getAddDBCL');
            Route::post('add','DBCLController@postAddDBCL');

            Route::get('edit/{id}','DBCLController@getEditDBCL');
            Route::post('edit/{id}','DBCLController@postEditDBCL');

            Route::get('delete/{id}','DBCLController@getDeleteDBCL');
        });

        Route::group(['prefix'=>'postcate'],function(){
            Route::get('/','CatePostController@getPostCate');

            Route::post('/','CatePostController@postAddPostCate');

            Route::get('edit/{id}','CatePostController@getEditPostCate');
            Route::post('edit/{id}','CatePostController@postEditPostCate');

            Route::get('delete/{id}','CatePostController@getDeletePostCate');
        });

        Route::group(['prefix'=>'information'],function(){
            Route::get('/','InforController@getInfo');

            Route::get('add','InforController@getAddInfo');
            Route::post('add','InforController@postAddInfo');

            Route::get('edit/{id}','InforController@getEditInfo');
            Route::post('edit/{id}','InforController@postEditInfo');

            Route::get('delete/{id}','InforController@getDeleteInfo');
        });
    });
});
