<?php 
Route::group(['prefix'=>'categories'],function(){
	Route::get('/', 'CategoryController@index')->name('cate.list');
	Route::get('remove/{id}', 'CategoryController@destroy')->name('cate.destroy');
	Route::get('add', 'CategoryController@addNew')->name('cate.add-new');
	Route::get('update/{id}', 'CategoryController@update')->name('cate.update');
	Route::post('save', 'CategoryController@save')->name('cate.save');
});


?>