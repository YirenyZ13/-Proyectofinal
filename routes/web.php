<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\NotasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

       //INDEX
       Route::get('/',[NotasController::class,'index'])->name('nota.index');

       // SHOW
       Route::get('/nota/{id}/show',[NotasController::class,'show'])->name('nota.show');
       
       // CREATE Y STORE
       Route::get('/nota/crear',[NotasController::class,'create'])->name('nota.crear');
       Route::post('/nota/store',[NotasController::class,'store'])->name('nota.store');
       
       // CREATE CATEGORIA
       Route::post('/categoria/store',[CategoriasController::class,'store'])->name('categoria.store');
       
       // EDIT
       Route::get('/nota/{id}/editar',[NotasController::class,'edit'])->whereNumber('id')->name('nota.editar');
       Route::put('/nota/{id}/editar',[NotasController::class,'update'])->whereNumber('id')->name('nota.update');
       
       //DELETE
       Route::delete('/nota/{id}/borrar',[NotasController::class,'destroy'])->whereNumber('id')->name('nota.borrar');
       
       // LOGIN
      