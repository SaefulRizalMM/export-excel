<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportExcelController;

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

Route::controller(ExportExcelController::class)->group(function(){
    Route::get('get-field-table', 'getFieldTable')->name('export.field');
    Route::get('export/index', 'index')->name('export.index');
    Route::get('export/excel', 'exportIbpr')->name('export.excel');
    Route::post('export/excel', 'dynamicExport')->name('export.dynamic');
});
