<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Stichoza\GoogleTranslate\GoogleTranslate;

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

Route::get('translate',function ()
{
    $lang = new GoogleTranslate('en');
    return $lang->getSource('en')->setTarget('en')->translate("hello world");
});







Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::get('/languageDemo', 'App\Http\Controllers\HomeController@languageDemo');




Route::get('/',[App\Http\Controllers\MainController::class, 'index']);
Route::get('bestworker',[App\Http\Controllers\MainController::class, 'best']);
Route::get('single/{id}',[App\Http\Controllers\MainController::class, 'single']);
Route::get('files',[App\Http\Controllers\FileController::class, 'index']);
Route::get('comit',[App\Http\Controllers\FileController::class, 'comit']);
Route::get('huquqiy',[App\Http\Controllers\FileController::class, 'huquq']);
Route::get('comfunction',[App\Http\Controllers\FileController::class, 'cfunc']);
Route::get('functions',[App\Http\Controllers\FileController::class, 'function']);
Route::get('show/{id}',[App\Http\Controllers\FileController::class, 'functionshow']);
Route::get('rahbar',[App\Http\Controllers\FileController::class, 'rahbar']);
Route::get('viloyat',[App\Http\Controllers\FileController::class, 'viloyat']);
Route::get('abrahbar/{id}',[App\Http\Controllers\FileController::class, 'abrah']);
Route::get('showxisob/{id}',[App\Http\Controllers\FileController::class, 'shxisob']);
Route::get('xisobot',[App\Http\Controllers\FileController::class, 'xisobot']);
Route::get('worker',[App\Http\Controllers\MainController::class, 'workers']);
Route::get('yangiliklar',[App\Http\Controllers\FileController::class, 'yangiliklar']);
Route::get('contact',[App\Http\Controllers\FileController::class, 'contact']);















Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
