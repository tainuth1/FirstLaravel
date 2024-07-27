<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // Get data from database
    // $users = DB::select('SELECT * FROM students');
    $users = DB::table('students')->get();
    // $users = DB::table('students')->find(1);
    // $users = DB::table('students')->get()->first();
    // $users = DB::table('students')->get()->first();

    // Insert data into database
    // $user = DB::insert("INSERT INTO students (name, gender, age) VALUES(?, ?, ?)", [
    //     'aaaa bbbb',
    //     'ab',
    //     200
    // ]);
    // $user = DB::table('students')->insert([
    //     'name' => 'ABC',
    //     'gender' => 'male',
    //     'age' => 19
    // ]);

    // Update data in database
    // $user = DB::update("UPDATE students SET age = ? WHERE id = ?", [
    //     19, 5
    // ]);
    // $user = DB::table('students')->where('id', 7)->update([
    //     'name' => 'Mey Chethaputi'
    // ]);

    //  Delete data from database
    // $user = DB::delete("DELETE FROM students WHERE id = ?", [6]);
    // $user = DB::table('students')->where('id', 8)->delete();

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
