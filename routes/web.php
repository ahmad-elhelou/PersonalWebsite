<?php

use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/send-test-email', function () {
    Mail::to('ahmedmazenhelou2001@gmail.com')->send(new TestEmail("This is a test email from Laravel 12!"));
    return "Test email sent!";
});