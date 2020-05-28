<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/welcom', function () {
//     return view('welcome');
// });

Route::get('check', 'checkonline@userOnlineStatus');


Route::group(['prefix' => 'home'], function () {

    Route::get('/','HomeController@getIndex')->name('home.get.index');
    Route::get('/{tit}','HomeController@getContent')->name('home.get.content');

    Route::group(['prefix' => 'user'], function () {

        Route::get('/login','HomeController@getLogin')->name('home.get.login');
        Route::post('/login','HomeController@postLogin')->name('home.post.login');

        Route::get('/sigin','HomeController@getSigin')->name('home.get.sigin');
        Route::post('/sigin','HomeController@postSigin')->name('home.post.sigin');

        Route::get('/logout','HomeController@getLogout')->name('home.get.logout');

        Route::post('/comment/{new_id}','HomeController@postComment')->name('home.post.comment');

        Route::get('/{id}','HomeController@postDeleteComment')-> name('home.post.deletecomment');
        
        Route::get('/{id}','HomeController@postReportComment')-> name('home.post.reportcomment');
    });
});

Route::group(['prefix' => 'admin'], function() {
    
    Route::get('/', function() {
        return view('admin.other.index');
    });
    //-----Login admin
    Route::get('/login','AdminController@getLogin')->name('admin.get.login');
    Route::post('/login','AdminController@postLogin')->name('admin.post.login');

    Route::group(['middleware' => 'admin'], function() {
        
        Route::get('/','AdminController@getIndex')->name('admin.get.index');
        Route::post('/','AdminController@postIndex')->name('admin.post.index');

        Route::group(['prefix' => 'news'], function() {

            Route::get('/create','NewController@getCreate')->name('admin.new.get.create');
            Route::post('/create','NewController@postCreate')->name('admin.new.post.create');

            Route::get('/list','NewController@getList')->name('admin.new.get.list');
            //Route::post('/list','NewController@postList')->name('admin.new.post.list');

            Route::get('/edit/{id}','NewController@getEdit')->name('admin.new.get.edit');
            Route::post('/edit/{id}','NewController@postEdit')->name('admin.new.post.edit');

            Route::post('/delete/{id}','NewController@getDelete')->name('admin.new.get.delete');

        });
        
        Route::group(['prefix' => 'user'], function() {
            
            Route::get('/list','UserController@getList')->name('admin.user.get.list');

        });

        Route::group(['prefix' => 'comment'],function(){

            Route::get('/list','CmtController@getList')->name('admin.cmt.get.list');
            
            Route::get('/delete/{id}','CmtController@getDelete')->name('admin.cmt.get.delete');

        });
        
        Route::group(['prefix' => 'info'], function () {
            
            Route::get('/profile','AdminController@getProfile')->name('admin.info.get.profile');

            Route::get('/edit','AdminController@getEdit')->name('admin.info.get.edit');
            Route::post('/edit','AdminController@postEdit')->name('admin.info.post.edit');
            
        });
    });
    
});



