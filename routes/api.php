<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ChatSessionController;

Route::resource('chats', ChatController::class);
Route::resource('sessions', ChatSessionController::class);