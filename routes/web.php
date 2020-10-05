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

//Debe utilzarse esta forma mas frecuentemente ya que tiene un mejor rendimiento.
Route::view("/", "home", ["nombre" => "Daniel Mauricio"])->name("home");
Route::view("/about", "about")->name("about");
Route::view("/contact", "contact")->name("contact");
Route::post("/contact", "ContactController@store");
Route::get("/portfolio","PortfolioController@index")->name("portfolio");
