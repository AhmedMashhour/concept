<?php


Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){


	Route::get('login','AdminAuth@login');
	Route::get('forgot','AdminAuth@forgot_password');
	Route::post('forgot','AdminAuth@forgot_password_reset');
	Route::get('reset/password/{token}','AdminAuth@reset_password');
	Route::post('reset/password/final/{token}','AdminAuth@reset_password_final');
	Route::post('login','AdminAuth@dologin');

	Config::set('auth.defaults','admin');
	Route::group(['middleware'=>'admin:admin'],function(){
	    Route::resource('admin','AdminController');

        Route::resource('products','ProductController');
        Route::delete('products/destroy/all','ProductController@multiDelete');
        Route::post('upload/image/{pid}','ProductController@upload_files');
        Route::post('delete/image','ProductController@deleteFile');
        Route::post('update/image/{id}','ProductController@update_product_image');
        Route::post('delete/product/image/{id}','ProductController@delete_product_image');



        Route::resource('departments','DepartmentController');
        Route::delete('admin/destroy/all','AdminController@multiDelete');


        Route::resource('/programmers','Developer');
        Route::delete('/admin/programmers/all','Developer@multiDelete');

        Route::resource('users','UsersController');
        Route::delete('users/destroy/all','UsersController@multiDelete');
    Route::get('settings','Settings@setting');
        Route::post('settings','Settings@setting_save');

	Route::any('logout','AdminAuth@logout');

	Route::get('/',function(){
		return view('admin.home');
	});
});
});
