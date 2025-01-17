<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});


Route::get('/devices', function(){
    $devices = [
        [
            "id" => 1,
            "name" => "Sensor Suhu",
            "min_value" => 0,
            "max_value" => 100,
            "current_value" => 25
        ],
        [
            "id" => 2,
            "name" => "Kipas Angin",
            "min_value" => 0,
            "max_value" => 5,
            "current_value" => 2
        ],
        [
            "id" => 3,
            "name" => "Lampu Kamar",
            "min_value" => 0,
            "max_value" => 100,
            "current_value" => 50
        ],
        [
            "id" => 4,
            "name" => "Lampu Taman",
            "min_value" => 0,
            "max_value" => 1,
            "current_value" => 1
        ]
    ];
    return view('devices', [
        "title" => "devices",
        "devices" => $devices
    ]);
});





Route::get('/rules', function(){
    return view('rules', [
        "title" => "rules"
    ]);
});


Route::get('/users', function(){
    return view('users', [
        "title" => "users"
    ]);
});
