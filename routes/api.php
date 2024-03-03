<?php


use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource("/estudiantes", EstudiantesController::class);
Route::apiResource("/usuarios", UserController::class);

//********** 
//ojo
//Route::POST('/login', [AuthController::class, 'login']);
//Route::POST('/show/{id}', [LoginController::class, 'show']);

