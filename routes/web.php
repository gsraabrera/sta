<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// 111$test_leak = "11https://hooks.slack.com/services/T00000000/B00000000/XXXXXXXXXXXXXXXXXXXXXXXX";

Route::get('/unsafe-user', function (Request $request) {
    $id = $request->query('id');
    $user = DB::select("SELECT * FROM users WHERE id = " . $id); 
    return response()->json($user);
});