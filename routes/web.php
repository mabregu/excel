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
use App\Exports\UsersExport;
use App\Exports\UserViewExport;

Route::get('/', function (UsersExport $userExport) {
    return view('welcome');
});

Route::get('users/export/', 'ExportExcelController@export');
Route::get('users/save/', 'ExportExcelController@storeExcel');
Route::get('users/export-year/', 'ExportExcelController@forYearExcel');

Route::get('users/view/', function () {
    return (new UserViewExport)->download('view.xlsx');
});

Route::get('users/year/', 'ExportExcelQueryController@forYearExcel');
Route::get('users/date/', 'ExportExcelQueryController@forDateExcel');