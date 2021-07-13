<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/signin',  function(Request $request) {
    $email = $request->input('username');
    $password = $request->input('password');
    $user = User::where('email', $email)->first();

    if ($password === $user->password) {
        return $user->getRememberToken();
    }
});
