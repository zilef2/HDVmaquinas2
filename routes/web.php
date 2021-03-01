<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PDFController;
use App\Http\Livewire\informeHDV;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', 'Controller@prueba')->name('prueba');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['prefix'=>"adminis"],function () {
    //<editor-fold desc="iniciales">

//    Route::get('superadmin', '\App\Http\Controllers\AdminController@tablas')->name('permisos');
//    Route::get('aprobando/{id}', \App\Http\Livewire\AprovandoUsers::class)->name('aprovando');

    //</editor-fold>

//    Route::get('export2', '\App\Http\Controllers\Controller@export2')->name('export2');
    Route::get('export2', [Controller::class,'export2'])->name('export2');

    Route::get('create-pdf-file/{id}', [PDFController::class, 'descargarequipo'])->name('descargarequipo');
    Route::get('informeHDV/{id_a}', [App\Http\Livewire::class])->name('informeHDV');
    Route::get('informeHDV/{id_a}', informeHDV::class)->name('informeHDV');





});
Route::group(['prefix'=>"stduser"],function () {
    //<editor-fold desc="iniciales">

//    Route::get('superadmin', '\App\Http\Controllers\AdminController@tablas')->name('permisos');
//    Route::get('aprobando/{id}', \App\Http\Livewire\AprovandoUsers::class)->name('aprovando');

    //</editor-fold>
});




    //<editor-fold desc="artisan">

Route::get('/foo', function () {
    if (file_exists(public_path('storage'))){
        return 'Ya existe';
    }
    app('files')->link(
        storage_path('app/public'), public_path('storage')
    );return 'Listo';
});

Route::get('/clear-c', function () {
    echo Artisan::call('cache:clear');
    echo Artisan::call('route:clear');
    echo Artisan::call('config:clear');
    echo Artisan::call('config:cache');
    return " Listo papá";
});
//</editor-fold>

