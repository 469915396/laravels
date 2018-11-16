<?php
//网站首页
Route::get('/','Home\HomeController@index')->name('home');
//用户管理
Route::get('/register','UserController@register')->name('register');//注册
Route::any('/send','Util\CodeController@send')->name('code.send');//验证码
Route::get('/login','UserController@login')->name('login');//登陆
Route::post('/register','UserController@store')->name('register');//注册提交的数据
Route::post('/loginFrom','UserController@loginFrom')->name('loginFrom');//登陆提交数据
Route::get('/accountOff','UserController@accountOff')->name('accountOff');//注销
Route::get('/modpassword','UserController@modPassword')->name('modpassword');//重置密码
Route::post('/passwordData','UserController@passwordData')->name('passwordData');//登陆提交数据

Route::get('/home', 'Home\HomeController@index')->name('home');
//后台管理
Route::group(['middleware'=>['admin.auth'],'prefix'=>'admin','namespace'=>'Admin','as'=>'admin.'],function (){
      Route::get('index','IndexController@index')->name('index');
});
