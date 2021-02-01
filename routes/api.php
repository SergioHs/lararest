<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('applicants', 'App\Http\Controllers\ApplicantsController');
Route::resource('skills', 'App\Http\Controllers\SkillsController');

Route::get('error', function () {
   return response()->json(['message' => 'Auth Error', 'status' => '401']);
})->name('error');

Route::group(array('prefix' => 'api'), function()
 {
   Route::get('/', function () {
     return response()->json(['message' => 'Applicants API', 'status' => 'Connected']);
   })->name('/');

});