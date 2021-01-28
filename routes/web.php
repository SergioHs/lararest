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

//  Route::get('/', function () {
//      return view('welcome');
// });

Route::group(array('prefix' => 'api'), function()
{

  Route::get('/', function () {
      return response()->json(['message' => 'Applicants API', 'status' => 'Connected']);;
  });

  Route::resource('applicants', 'App\Http\Controllers\ApplicantsController');
  Route::resource('skills', 'App\Http\Controllers\SkillsController');

});

Route::get('/', function () {
    return redirect('api');
    //Aqui pode ser a rota do SPA
});
