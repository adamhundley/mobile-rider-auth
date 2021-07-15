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
    // Would love to check password this way but not working for some reason?!
    //  if (Hash::check($password, $user->password)) {
    //  return response($user->getRememberToken(), 200)->header('Content-Type', 'text/plain');
    // }
    // Also would love something like this but having issues as well :shrug:
    // if (Auth::attempt(['email' => $email, 'password' => $password])) {
        //  return response($user->getRememberToken(), 200)->header('Content-Type', 'text/plain');
    // }
    // if (Auth::attempt($credentials)) {
    //     $request->session()->regenerate();
    //
    //     return redirect()->intended('dashboard');
    // }

    if ($password === $user->password) {
        return response($user->getRememberToken(), 200)->header('Content-Type', 'text/plain');
    }
});
Route::post('/signout',  function(Request $request) {
    $remember_token = $request->bearerToken();
    $user = User::where('remember_token', $remember_token)->first();
    $user->last_logout = date('Y-m-d H:i:s');
    $user->save();
});
