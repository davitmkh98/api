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
Route::post('posts', [\App\Http\Controllers\PostController::class, 'createpost']);

//create story
Route::post('story', [\App\Http\Controllers\PostController::class, 'createstory']);

Route::post('addweb', [\App\Http\Controllers\WebsiteController::class, 'addweb']);


/*
//show posts
Route::get('posts', [\App\Http\Controllers\PostController::class, 'showposts'] );

//Show post
Route::get('postbyid/{id}', [\App\Http\Controllers\PostController::class, 'postbyid']);

//update post
Route::put('upost', [\App\Http\Controllers\PostController::class, 'upost']);

//delete post
Route::delete('deletepost/{id}', [\App\Http\Controllers\PostController::class, 'deletepost']);
*/


//user subscripe
Route::post('subscripe', [\App\Http\Controllers\SubscriptorController::class, 'subscripe']);
//update user email
Route::post("update", [\App\Http\Controllers\SubscriptorController::class, "update"]);
//delete subscription
Route::get("unsubscripe/{email}", [\App\Http\Controllers\SubscriptorController::class, 'unsubscripe']);








Route::post('test100', function (Request $request){
   return $request->name . ' ' . $request->email . ' ' . $request->password;
});




/*
Route::get('posts', function () {
    $data = Post::all();
    return response()->json(Post::all());
});
*/


//Route::get('getindex',[\App\Http\Controllers\PostController::class,'getindex']);


Route::post('sendmail', [\App\Http\Controllers\PostController::class, 'sendmail']);

/*
Route::post('user', function(){
    $user = new User();
    $user->name = 'name';
    $user->save();
});
*/
/*
    $post = new Post();
    $post->title = 'Test';
    $post->save();
*/



//example
Route::get('test', function () {
    $data = [
        'hello' => 'world',
        'foo' => 'bar',
    ];
    return response()->json($data);
});

/*
Route::post('test_2', [\App\Http\Controllers\PostController::class, 'test_2' ] );
function test_2(Request $request)
{
    $paramas = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required|min:3|max:12'
    ]);
    return $paramas;
}
*/
Route::post('email',[PostController::class,'postEmail']);


Route::post('story',[\App\Http\Controllers\PostController::class, 'story']);

Route::post('example',[\App\Http\Controllers\ExampleController::class, 'example']);

