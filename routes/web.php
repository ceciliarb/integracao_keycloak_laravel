<?php

use Illuminate\Support\Facades\Auth;
use Stevenmaguire\OAuth2\Client\Provider\Keycloak;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('openid_login')->get('/login', function () {
    return 'logado!';
})->name("login");


Route::middleware('openid_checktoken')->group(function() {
    Route::get('/home', function () {
        $user_name = Auth::guard('keycloak')->user()->getName();
        return "logado! $user_name<br><br><a href='".url('logout')."'>logout</a>";
   })->name("home");

    Route::get('/logout', function (Keycloak $kc) {
        return redirect($kc->getLogoutUrl(['redirect_uri' => config('keycloak.redirectLogoutUri')]));
   })->name("logout");
});
