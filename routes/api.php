<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// //List customers Testing
// Route::get('/customers', function () {
//     $customer = [
//         'first_name' => 'Chen',
//         'last_name' => 'Indra',
//     ];
//     return $customer;
// });

Route::get('/customers', 'Admin\CustomerCrudController@indexapi');
