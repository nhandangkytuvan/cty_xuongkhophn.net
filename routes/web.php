<?php
// web
Route::get('/', 'Web\HomeController@show');
// Term
Route::get('/{term_alias?}/{term_id?}', 'Web\TermController@show')->where(['term_alias'=>'[-a-z0-9]+','term_id'=>'[0-9]+']);
// Post
Route::get('/{post_alias?}/{post_id?}.htm', 'Web\PostController@show')->where(['post_alias'=>'[-a-z0-9]+','post_id'=>'[0-9]+']);

Route::any('user/login','User\UserController@login');

Route::group(['middleware' => ['checklogin']], function () {
	// user
	Route::any('user/create','User\UserController@create')->middleware('checkadmin');
	Route::get('user/logout','User\UserController@logout');
	Route::get('user/index','User\UserController@index');
	Route::any('user/edit','User\UserController@edit');
	Route::any('user/editGroup/{user_id?}','User\UserController@editGroup')->middleware('checkadmin');
	Route::any('user/block/{user_id?}','User\UserController@block')->middleware('checkadmin');
	Route::any('user/delete/{user_id?}','User\UserController@delete')->middleware('checkadmin');
	Route::post('user/forget','User\UserController@forget');
	// post
	Route::any('user/post/create','User\PostController@create');
	Route::any('user/post/edit/{post_id?}','User\PostController@edit');
	Route::any('user/post/show/{post_id?}','User\PostController@show');
	Route::any('user/post/delete/{post_id?}','User\PostController@delete');
	Route::any('user/post/index{query?}','User\PostController@index');
	// media
	Route::any('user/media/create','User\MediaController@create');
	Route::any('user/media/edit/{media_id?}','User\MediaController@edit');
	Route::any('user/media/show/{media_id?}','User\MediaController@show');
	Route::any('user/media/delete/{media_id?}','User\MediaController@delete');
	Route::any('user/media/index{query?}','User\MediaController@index');

	// term
	Route::any('user/term/create','User\TermController@create')->middleware('checkadmin');
	Route::any('user/term/edit/{term_id?}','User\TermController@edit');
	Route::any('user/term/delete/{term_id?}','User\TermController@delete')->middleware('checkadmin');
	Route::any('user/term/index{query?}','User\TermController@index');
	// setting
	Route::any('user/setting/web', 'User\SettingController@web');
});