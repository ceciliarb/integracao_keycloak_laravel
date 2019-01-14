<?php

use Illuminate\Http\Request;
use function GuzzleHttp\json_encode;
use Illuminate\Support\Facades\Auth;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('openid_checktoken')->group(function() {
    Route::get('/user', function () {
        $u =  Auth::guard('keycloak')->user()->toArray();
        return \json_encode($u);
   });
});

