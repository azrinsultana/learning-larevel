<?php

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');








Route::group(['middleware'=>['sess']], function(){

	
	Route::get('/home', 'homeController@index')->middleware('sess')->name('home.index');
	//Route::get('/userlist', 'homeController@userlist')->name('home.userlist');
	Route::get('/userlist', ['uses'=> 'homeController@userlist', 'as'=>'home.userlist']);
    Route::get('/details/{id}', 'homeController@show');
    Route::get('/create', 'homeController@create')->name('home.create');
		Route::post('/create', 'homeController@store');
		Route::get('/user/edit/{id}', 'homeController@edit')->name('home.edit');
		Route::post('/user/edit/{id}', 'homeController@update');
		Route::get('/delete/{id}', 'homeController@delete')->name('home.delete');
		Route::post('/delete/{id}', 'homeController@destroy');

	Route::group(['middleware'=>['username']], function(){
		Route::get('/product', 'productController@index')->middleware('sess')->name('product.index');
		
	});

});








Route::get('/', function () {
    return view('welcome');
});
