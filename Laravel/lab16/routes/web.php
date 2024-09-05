<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/students', function() {
    return "Welcome students";
});

Route::get('/users', function() {
    $users = [
        ["id" => 1, "name" => "Alice", "age" => 24],
        ["id" => 2, "name" => "Bob", "age" => 28],
        ["id" => 3, "name" => "Charlie", "age" => 22],
        ["id" => 4, "name" => "David", "age" => 30],
        ["id" => 5, "name" => "Eve", "age" => 26],
        ["id" => 6, "name" => "Frank", "age" => 27],
        ["id" => 7, "name" => "Grace", "age" => 25],
        ["id" => 8, "name" => "Hannah", "age" => 29],
        ["id" => 9, "name" => "Ivy", "age" => 31],
        ["id" => 10, "name" => "Jack", "age" => 23],
    ];
    return view('user', ["users" => $users]);
});

Route::get('/users/{id}', function($id) {
    $users = [
        ["id" => 1, "name" => "Alice", "age" => 24],
        ["id" => 2, "name" => "Bob", "age" => 28],
        ["id" => 3, "name" => "Charlie", "age" => 22],
        ["id" => 4, "name" => "David", "age" => 30],
        ["id" => 5, "name" => "Eve", "age" => 26],
        ["id" => 6, "name" => "Frank", "age" => 27],
        ["id" => 7, "name" => "Grace", "age" => 25],
        ["id" => 8, "name" => "Hannah", "age" => 29],
        ["id" => 9, "name" => "Ivy", "age" => 31],
        ["id" => 10, "name" => "Jack", "age" => 23],
    ];

    // Check if the user ID is within the range of the array
    if ($id > 0 && $id <= count($users)) {
        return view('user_detail', ["user" => $users[$id - 1]]);
    } else {
        return abort(404);
    }
})->where('id', '[0-9]+');

// Route::get('/home', function() {
//     $users = [
//         ["id" => 1, "name" => "ayaat", "age" => 24],
//         ["id" => 2, "name" => "eman", "age" => 25],
//         ["id" => 3, "name" => "nada", "age" => 26],
//     ];
//     return view('home', ["users" => $users]);
// });