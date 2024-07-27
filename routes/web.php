<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $users = DB::select('SELECT * FROM students');

    // Insert data into database
    // $user = DB::insert("INSERT INTO students (name, gender, age) VALUES(?, ?, ?)", [
    //     'aaaa bbbb',
    //     'ab',
    //     200
    // ]);

    // Update data in database
    // $user = DB::update("UPDATE students SET age = ? WHERE id = ?", [
    //     19, 5
    // ]);

    //  Delete data from database
    // $user = Db::delete("DELETE FROM students WHERE id = ?", [6]);

    dd($users);

});
Route::get('/course', function () {
    return view('course');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
