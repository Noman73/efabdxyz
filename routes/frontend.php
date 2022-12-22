<?php

use Illuminate\Support\Facades\Route;


Route::group([
    'middleware' =>'pinVarified',
    'namespace' => 'App\Http\Controllers\Frontend',
],function () {
    
    Route::resource('/matching','MatchingSaleController');
    Route::resource('/direct-commision','DirectCommisionController');
    Route::resource('/withdraw','WithdrawController');
    Route::get('/profile','ProfileController@index');
    Route::post('/profile','ProfileController@update')->name('frontend.profile');
    Route::get('/tree/{id}','TreeController@index');
    Route::get('/test/xyz','TestController@index');
    Route::get('/sale_count_all','MatchingSaleController@saleCount');
    Route::get('/pin','PinController@index');
});


Route::group([
    'namespace' => 'App\Http\Controllers\Frontend',
],function () {
Route::get('/pin-verify','PinVerificationController@index');
Route::get('/about','AboutUsController@index');
Route::get('/how-it-works','HowItWorkController@index');
Route::post('/pin-verify','PinVerificationController@pinVerify')->name('pin_verify');
Route::resource('/registration','CustomerController');
Route::post('/get-refferal','CustomerController@getCustomer');
Route::post('/get-package','PackageController@getPackage');
Route::get('/send-otp','PasswordResetController@otpForm');
Route::post('/send-otp','PasswordResetController@sendOtp')->name('password.reset.otp');
Route::post('/password-update','PasswordResetController@resetPassword')->name('password.custom.update');

});
