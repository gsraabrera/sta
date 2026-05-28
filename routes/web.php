<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome12');
});

Route::get('/unsafe-user', function (Request $request) {
    $id = $request->query('id');
    $user = DB::select("SELECT * FROM users WHERE id = " . $id); 
    return response()->json($user);
});