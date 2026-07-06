<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blogs', function () {
    $blogs = [
        [
            'title' => 'บทความที่ 1',
            'content' => 'เนื้อหาบทความที่ 1',
            'status' =>true
        ],
        [
            'title' => 'บทความที่ 2',
            'content' => 'เนื้อหาบทความที่ 2',
            'status' =>true
        ],
        [
            'title' => 'บทความที่ 3',
            'content' => 'เนื้อหาบทความที่ 3',
            'status' =>false
        ]
    ];
    return view('blogs',compact('blogs'));
})->name('blogs');

Route::get('/abouts', function () {
    $name = 'Hathaiphat Phakdeekaew';
    $date = '6 กรกฎาคม 2026';

    return view('abouts',compact('name','date'));
})->name('abouts');

Route::get('/student/{id}', function ($id) {
    return view('student', ['id' => $id]);
})->name('student.profile');

Route::fallback(function () {
    return 'ไม่พบหน้าเว็บ';
});