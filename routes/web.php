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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('feed.feed');
});
Route::get('/id{profile_id}', function ($profile_id) {
    return view('profile.profile');
});
Route::get('/reg', function () {
    return view('reg.reg');
});
Route::get('/login', function () {
    return view('login.login');
});
Route::get('/restore', function () {
    return view('restore.restore');
});
Route::get('/setting', function () {
    return view('setting.setting');
});
Route::get('/setting/change_info', function () {
    return view('setting.change_info');
});
Route::get('/setting/change_photo', function () {
    return view('setting.change_photo');
});
