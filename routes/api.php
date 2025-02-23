<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GithubController;

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

Route::middleware('auth:sanctum')->group(function (){
	  Route::group(['prefix' =>'v1', 'namespace' => 'Api'], function (){
			 Route::post('/register',[AuthController::class, 'register']);
			 Route::get('/auth/github', [GithubController::class, 'redirectToGithub']);
			 Route::get('/auth/github/callback', [GithubController::class, 'handleGithubCallback']);
	  });
});
