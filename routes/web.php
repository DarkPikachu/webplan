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

Route::get('/1', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing');
});

Route::prefix('division')->group(function () {

    Route::get('about', function () {
        return view('about');
    });
    
    Route::get('org_chart', function () {
        return view('org_chart');
    });

    Route::get('personnel', function () {
        return view('personnel');
    });
});


Route::prefix('gallery')->group(function () {

    Route::get('/', function () {
        return view('gallery');
    });

    Route::get('/{album_id}', function () {
        return view('gallery_view_album');
    });

    Route::get('/thumbnail/{album_id}', 'GalleryController@getThumbnail');

    Route::get('/thumbnail/{album_id}/{photo_name}', 'GalleryController@getThumbnailPhoto');

    Route::get('/photo/{album_id}/{photo_name}', 'GalleryController@getPhoto');
});


Route::get('sitemap', function () {
    return view('about');
});

Route::get('annual_info_university', function () {
    return view('annual_info_university');
});

Route::get('annual_info_plan', function () {
    return view('annual_info_plan');
});

Route::prefix('download')->group(function () {
    Route::get('users', function () {
        // Matches The "/admin/users" URL
    });

    Route::get('circular', function () {
        return view('circular');
    });
});



Route::prefix('backoffice')->group(function () {
    Route::get('login', function () {
        // Matches The "/admin/users" URL
    });
});
