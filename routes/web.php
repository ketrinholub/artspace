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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/videos', 'VideoController@index')->name('getVideos')->middleware('auth');
Route::get('/videos/{id}', 'VideoController@show')->name('getVideo')->middleware('auth');

Route::get('/artists', 'ArtistController@index')->name('getArtists')->middleware('auth');
Route::get('/artists/{artistId}', 'ArtistController@show')->name('getArtist')->middleware('auth');

Route::get('/blogs', 'BlogController@index')->name('getBlogs')->middleware('auth');
Route::get('/blogs/{blogId}', 'BlogController@show')->name('getBlog')->middleware('auth');

Route::get('/tests', 'TestController@index')->name('getTests')->middleware('auth');
Route::get('/tests/{testId}', 'TestController@show')->name('getTest')->middleware('auth');

Route::post('/login', 'CustomAuthController@login')->name('login');
Route::post('/signup', 'CustomAuthController@signup')->name('signup');

Route::get('/profile', 'UserController@index')->name('getProfile')->middleware('auth');
