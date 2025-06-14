<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('accounting-assurance', function () {
    return view('frontend.accounting-assurance');
});
Route::get('advisory', function () {
    return view('frontend.advisory');
});

Route::get('tax', function () {
    return view('frontend.tax');
});

Route::get('technology-cybersecurity', function () {
    return view('frontend.technology-cybersecurity');
});

Route::get('who-we-are', function () {
    return view('frontend.who-we-are');
});
Route::get('equity-inclusion', function () {
    return view('frontend.equity-inclusion');
});


Route::get('affiliate-offices', function () {
    return view('frontend.affiliate-offices');
});
Route::get('contact-us', function () {
    return view('frontend.contact-us');
});

Route::post('contact/submit', 'App\Http\Controllers\frontend\ContactUsController@submit')->name('frontend.contact.submit');
