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

Route::get('/', 'showPages@homepage');
Route::get('/about', 'showPages@about');

Route::get('/services', 'showPages@services');
Route::get('/services/{page}', 'showPages@services');
Route::get('/gallery', 'showPages@gallery');



Route::get('/contact', 'ContactController@index');
Route::post('/contact/message', 'ContactController@messageUs');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// MAIL ROUTE
Route::get('/mail', 'MailController@index');
Route::get('/view/{id}', 'MailController@view');
Route::delete('/message/{message}', 'MailController@delete');
Route::post('/message/reply/{id}', 'MailController@reply');

// PAGES CONFIG ROUTE
Route::get('/edit/page/', 'PageTitleController@pages_dropdown');
Route::get('/edit/page/{id}/content', 'PageTitleController@pages_content');
Route::PATCH('/page/content/{id}', 'PageTitleController@updateContent');

Route::get('/create/pages', 'CreatePages@view');
Route::post('/create/pages/save', 'CreatePages@saved');

Route::get('/create/content', 'PageTitleController@view');
Route::post('page/content/save/{page_id}', 'PageTitleController@saved');

Route::get('/gallery/new/profile', 'StudentProfileController@index');
Route::post('/save/image', 'StudentProfileController@upload');
Route::post('/save/student', 'StudentProfileController@save');