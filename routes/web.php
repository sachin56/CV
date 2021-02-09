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
    return view('index');
});

//Route::get('/download/pdf/{design}', function () {
//    return view('download_pdf');
//});



Auth::routes();

Route::get('/form_details/{id}', 'HomeController@formDetails')->name('home');



Route::group([ 'middleware' => ['auth']], function () {

    Route::post('/form1/submit', 'FormController@formOneSave');

    Route::post('/form2/submit', 'FormController@formTwoSave');

    Route::post('/form3/submit', 'FormController@formThreeSave');

    Route::post('/form4/submit', 'FormController@formFourSave');

    Route::post('/form5/submit', 'FormController@formFiveSave');

    Route::post('/form6/submit', 'FormController@formSixSave');

    Route::post('/form7/submit', 'FormController@formSevenSave');

    Route::post('/form8/submit', 'FormController@formEightSave');

    Route::post('/form9/submit', 'FormController@formNineSave');

    Route::get('/download/pdf/{design}', 'PdfController@showBeforePdf');

    Route::get('/download/{design}', 'PdfController@pdfTest');
});



