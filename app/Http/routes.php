<?php

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    # Show login form
    Route::get('/login', 'Auth\AuthController@getLogin');

    # Process login form
    Route::post('/login', 'Auth\AuthController@postLogin');

    # Process logout
    Route::get('/logout', 'Auth\AuthController@logout');

    # Show registration form
    Route::get('/register', 'Auth\AuthController@getRegister');

    # Process registration form
    Route::post('/register', 'Auth\AuthController@postRegister');

    Route::get('/announcements', 'AnnouncementController@getIndex');

    Route::get('/announcement/create', 'AnnouncementController@getCreate');

    Route::post('/announcement/create', 'AnnouncementController@postCreate');

    Route::get('/announcement/edit/{id?}', 'AnnouncementController@getEdit');

    Route::post('/announcement/edit', 'AnnouncementController@postEdit');

    Route::get('/announcement/show/{id?}', 'AnnouncementController@getShow');

    Route::get('/announcement/confirm-delete/{id?}', 'AnnouncementController@getConfirmDelete');

    Route::get('/announcement/delete/{id?}', 'AnnouncementController@getDelete');

});
