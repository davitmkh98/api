<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\PostController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//create post
Route::post('posts', [\App\Http\Controllers\PostController::class, 'createPost']);

//create story
Route::post('story', [\App\Http\Controllers\PostController::class, 'createStory']);

Route::post('addweb', [\App\Http\Controllers\WebsiteController::class, 'addWeb']);

//user subscribe
Route::post('subscribe', [\App\Http\Controllers\SubscriberController::class, 'subscribe']);
//update user email
Route::post("update", [\App\Http\Controllers\SubscriberController::class, "update"]);
//delete subscription
Route::get("unsubscribe/{email}", [\App\Http\Controllers\SubscriberController::class, 'unSubscribe']);



