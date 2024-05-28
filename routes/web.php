<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

/**
 * HTTP Methods:
 * 1. Get: untuk menampilkan sesuatu
 * 2. Post: untuk menambahkan data
 * 3. Put: untuk mengubah data
 * 4. Delete: untuk menghapus data
 */

// Route untuk menampilkan halaman daftar tugas
Route::get('/tasks', [TaskController::class, 'index']);
