<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TechnologyController;
use App\Http\Controllers\Api\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('projects', [ProjectController::class, 'index']);

Route::get('projects/{id}', [ProjectController::class, 'show']);

Route::get('types', [TypeController::class, 'index']);

Route::get('types/{slug}', [TypeController::class, 'show']);

Route::get('technologies', [TechnologyController::class, 'index']);

Route::get('technologies/{slug}', [TechnologyController::class, 'show']);

Route::post('comments', [CommentController::class, 'store']);