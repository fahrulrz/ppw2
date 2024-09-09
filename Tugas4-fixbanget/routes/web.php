<?php

use App\Http\Controllers\SongsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SongsController::class, 'index']);
