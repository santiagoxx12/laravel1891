<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Operaciones;


Route::get('/primos/{num1}',[Operaciones::class,'primos']);
Route::get('/numerosAmigos/{num2}/{suma}',[Operaciones::class,'numerosAmigos']);





Route::get('/frmCuadratica',[ResultController::class,'formularioCuadratica']);
Route::post('/cuadraticstore',[ResultController::class,'cuadraticStore'])->name('cuadratic.store'); 

Route::get('/frmprase',[ResultController::class,'invertirPalabra']);


// curso
Route::get('/curso/create',[CursoController::class,'create']);

Route::post('/curso/store',[CursoController::class,'store'])->name('curso.store');

Route::get('/curso/listar',[CursoController::class,'index'])->name('curso.index');

Route::get('/curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::put('/curso/{curso}',[CursoController::class,'update'])->name('curso.update');

Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');