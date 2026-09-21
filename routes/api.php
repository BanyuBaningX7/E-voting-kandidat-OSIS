<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CandidateController;
use App\Http\Controllers\Api\VoteController;

// Route CRUD Lengkap untuk Candidates (GET, POST, PUT, DELETE)
Route::apiResource('candidates', CandidateController::class);

// Route Tambahan
Route::post('/votes', [VoteController::class, 'store']);
Route::get('/results', [VoteController::class, 'results']);