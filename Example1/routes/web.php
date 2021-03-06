<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;
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

// Route::get('/', function () {
//     return view('welcome');
//     rutas estáticas
//     return "Hello World";
// });

//asociar ruta a un controlador
Route::get('/', HomeController::class);

//asociar métodos de controladores con routas
Route::get('cursos', [CursosController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursosController::class, 'create'])->name('cursos.create');


Route::post('cursos', [CursosController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}', [CursosController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursosController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursosController::class, 'update'])->name('cursos.update');