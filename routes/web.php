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
Auth::routes();


Route::group(['prefix' => 'webapi'], function () {
    //Route::post('ignore-word/store', 'IgnoreWordApiController@store');
	/*Route::resource('ignore-word', 'IgnoreWordApiController', ['only' => [
	    'index', 'store'
	]]);*/
});

/*Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});*/

//Route::get('/userInfo', 'ApiController@userInfo');
//Route::get('/token', 'ApiController@token');
//Route::post('/token', 'ApiController@token');
//Route::post('/submitErrorExample', 'ApiController@submitErrorExample');
//Route::post('/submitFalseAlarm', 'ApiController@submitFalseAlarm');
//Route::post('/submitIgnoreRule', 'ApiController@submitIgnoreRule');
//Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
//Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');
//Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
//Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');



Route::group(['prefix' => app('language.routePrefix')], function() {
	Route::get('/legal', 'LegacyController@legal');
	Route::get('/legal/privacy', 'LegacyController@privacy');
	Route::get('/legal/terms', 'LegacyController@terms');
	Route::get('/languages', 'LegacyController@languages');
	Route::get('/issues', 'LegacyController@issues');
	Route::get('/compare', 'LegacyController@compare');
	Route::get('/support', 'LegacyController@support');
	Route::get('/newsletter', 'LegacyController@newsletter');
	Route::get('/contact/newsletter.php', 'LegacyController@newsletter_old');
	Route::get('/home', 'HomeController@index')->name('home');
	//languagetoolplus.com only:
	//Route::get('/subscribe', 'SubscriptionController@subscribe');
	//Route::post('/subscribeHook', 'SubscriptionController@subscribeHook');
    Route::get('/ru/firefox', 'LegacyController@ru_firefox');
    Route::get('/ru/chrome', 'LegacyController@ru_chrome');
    Route::get('/ru/issues', 'LegacyController@ru_issues');
    Route::get('/ru/news', 'LegacyController@ru_news');
    Route::get('/{locale?}', 'WelcomeController@index');
	Route::resource('ignore-word', 'IgnoreWordController');
});
