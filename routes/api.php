<?php

use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\LibraryController;
use App\Http\Controllers\API\MedicalsController;
use App\Http\Controllers\api\PaymentsController;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\API\SessionsController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function ()
{
Route::post('/add-student', [StudentController::class, 'store']);
Route::post('/dashboard', [StudentController::class, 'show']);
Route::post('/update', [StudentController::class, 'update']);
Route::post('/archive', [StudentController::class, 'delete']);

Route::post('/new-session', [SessionsController::class, "store"]);
Route::post('/list-session', [SessionsController::class, "index"]);

Route::post('/lib-new', [LibraryController::class, 'store']);
Route::post('/lib-hist', [LibraryController::class, 'show']);
Route::post('/lib-update', [LibraryController::class, 'update']);

Route::post('/medical', [MedicalsController::class, 'store']);
Route::post('/medical-record', [MedicalsController::class, 'show']);
Route::post('/medical-update', [MedicalsController::class, 'update']);

Route::post('/admin-dashboard', [AdminController::class, 'show']);

Route::post('/payment', [PaymentsController::class, 'store']);
Route::post('/view-transact', [PaymentsController::class, 'show']);

Route::post('/labs', [MedicalsController::class, 'labstore']);
Route::post('/labs-update', [MedicalsController::class, 'labupdate']);
Route::post('/labs-view', [MedicalsController::class, 'labview']);

Route::post('/other-data', [StudentController::class, 'others']);

Route::post('/logout', [AuthController::class, 'logout']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
