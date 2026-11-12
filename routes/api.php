<?php

use Illuminate\Support\Facades\Route;

Route::get('/landing', function () {
    return response()->json([
        'success' => true,
        'app_name' => 'Tabungin',
        'tagline' => 'Nabung , capai tujuan bersama.',
        'description' => 'Kelola tabungan bersama pasangan atau teman dengan mudah.',
    ]);
});