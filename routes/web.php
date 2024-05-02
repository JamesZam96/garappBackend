<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('person/create',[PersonController::class,'create'])->name('person.create');
Route::post('person/store',[PersonController::class,'store'])->name('person.store');
Route::get('person/list',[PersonController::class,'index'])->name('person.index');
Route::get('person/{person}',[PersonController::class,'show'])->name('person.show');
Route::get('person/{person}/edit',[PersonController::class,'edit'])->name('person.edit');
Route::put('person/{person}',[PersonController::class,'update'])->name('person.update');
Route::delete('person/{person}',[PersonController::class,'destroy'])->name('person.destroy');