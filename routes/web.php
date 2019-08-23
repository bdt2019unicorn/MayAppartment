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
// Site ///////////
Route::get('/','Site\Home@index')->name('Site/Home');

Route::get('/About','Site\About@index')->name('Site/About');

Route::get('/Contact','Site\Contact@index')->name('Site/Contact');

Route::get('/Booking','Site\Booking@index')->name('Site/Booking');
Route::get('/Booking/AppartmentsList','Site\Booking@AppartmentsList')->name('Site/Booking/AppartmentsList');
Route::get('/Booking/RoomsList','Site\Booking@RoomsList')->name('Site/Booking/RoomsList');




///////////////////////////////////////



// Admin

Route::get("Admin/Login","Admin\Login@index")->name("Admin/Login"); 
Route::post("Admin/Login/login","Admin\Login@login")->name("Admin/Login/login"); 
Route::get("Admin/Logout","Admin\Login@logout")->name("Admin/Logout"); 



Route::get("Admin/Home","Admin\Home@index")->name("Admin/Home"); 

Route::get("Admin/Units","Admin\Units@index")->name("Admin/Units"); 
Route::get("Admin/Units/GetList","Admin\Units@GetList")->name("Admin/Units/GetList"); 
Route::get("Admin/Units/Add","Admin\Units@Add")->name("Admin/Units/Add"); 
Route::get("Admin/Units/Edit","Admin\Units@Edit")->name("Admin/Units/Edit"); 
Route::get("Admin/Units/Delete","Admin\Units@Delete")->name("Admin/Units/Delete"); 

Route::get("Admin/Users","Admin\Users@index")->name("Admin/Users"); 
Route::get("Admin/Users/GetList","Admin\Users@GetList")->name("Admin/Users/GetList"); 
Route::get("Admin/Users/Add","Admin\Users@Add")->name("Admin/Users/Add"); 
Route::get("Admin/Users/Edit","Admin\Users@Edit")->name("Admin/Users/Edit"); 
Route::get("Admin/Users/Delete","Admin\Users@Delete")->name("Admin/Users/Delete"); 

Route::get("Admin/Transactions","Admin\Transactions@index")->name("Admin/Transactions"); 
Route::get("Admin/Transactions/GetList","Admin\Transactions@GetList")->name("Admin/Transactions/GetList"); 
Route::get("Admin/Transactions/Add","Admin\Transactions@Add")->name("Admin/Transactions/Add"); 
Route::get("Admin/Transactions/Edit","Admin\Transactions@Edit")->name("Admin/Transactions/Edit"); 
Route::get("Admin/Transactions/Delete","Admin\Transactions@Delete")->name("Admin/Transactions/Delete"); 

Route::get("Admin/Appartments","Admin\Appartments@index")->name("Admin/Appartments"); 
Route::get("Admin/Appartments/GetList","Admin\Appartments@GetList")->name("Admin/Appartments/GetList"); 
Route::get("Admin/Appartments/Add","Admin\Appartments@Add")->name("Admin/Appartments/Add"); 
Route::get("Admin/Appartments/Edit","Admin\Appartments@Edit")->name("Admin/Appartments/Edit"); 
Route::get("Admin/Appartments/Delete","Admin\Appartments@Delete")->name("Admin/Appartments/Delete"); 

Route::get("Admin/Rooms","Admin\Rooms@index")->name("Admin/Rooms"); 
Route::get("Admin/Rooms/GetList","Admin\Rooms@GetList")->name("Admin/Rooms/GetList"); 
Route::get("Admin/Rooms/Add","Admin\Rooms@Add")->name("Admin/Rooms/Add"); 
Route::get("Admin/Rooms/Edit","Admin\Rooms@Edit")->name("Admin/Rooms/Edit"); 
Route::get("Admin/Rooms/Delete","Admin\Rooms@Delete")->name("Admin/Rooms/Delete"); 


///////////////////////
