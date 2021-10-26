<?php
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\AddressController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('customers',[CustomersController::class, 'index']);
Route::get('customers/{id}',[CustomersController::class, 'show']);
Route::post('customers',[CustomersController::class, 'store']);
Route::put('customers/{customers}',[CustomersController::class, 'update']);
Route::delete('customers/{id}',[CustomersController::class, 'delete']);
Route::apiResource('address','App\Http\Controllers\AddressController');
Route::get('customers/{customers}/address',[CustomersController::class, 'addresses']);