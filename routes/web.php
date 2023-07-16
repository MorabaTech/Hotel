<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/about', function(){
    return view('about');
});
Route::get('/rooms', function(){
    return view('rooms');
});

Route::get('/restaurant', function(){
    return view('restaurant');
});

Route::get('/gallery', function(){
    return view('gallery');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/conference', function(){
    return view('conference');
});

Route::get('/executive', function(){
    return view('executive');
});
Route::get('/standard', function(){
    return view('standard');
});
Route::get('/deluxe', function(){
    return view('deluxe');
});

Route::get('/booking', function(){
    return view('booking');
});

Route::post('/reserve', function(Request $request)
{

    $name = 'Enopat Hotel Reservations';
    $email = 'reservations@enopathotel.co.zw';

    Mail::to($email)->send(new \App\Mail\Reservation(
        $request->checkin,
        $request->checkout,
        $request->checkin_time,
        $request->persons,
        $request->phone_number
    ));


        return response('Email has been sent successfully',200);


});

Route::post('send_email', [\App\Http\Controllers\ContactController::class, 'sendEmail']);
