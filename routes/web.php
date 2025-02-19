<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () { 
    return 'World'; 
    }); 

Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);

Route::get('/user/{name}', function ($name) { 
return 'Nama saya '.$name; 
});

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
});

Route::get('/user/{name?}', function ($name=null) { 
    return 'Salsabila Mahda'.$name; 
}); 

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
    });

//resource controller 
Route::resource('photos', PhotoController::class); 

//Membuat view
Route::get('/greeting', function () { 
    return view('blog.hello', ['name' => 'Salsabila Mahda']); 
    }); 