<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/students', [StudentController::class], 'create')->name('students.create');
Route::get('/studentsList', [StudentController::class], 'index')->name('students.index');

Route::post('/students/add',[StudentController::class, 'store'])->name('students.store');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



