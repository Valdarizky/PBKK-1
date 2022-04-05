<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\FormController;
use App\Http\Models\Article;
use App\Models\Category;
use App\Models\User;

use App\Http\Controllers\ArticleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/input', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);

Route::get("/article", function(){
    return view('article');
});
Route::get("/home", function(){
    return view('home');
});

Route::get("/article", [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'content']);

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('article', [
        'title' => $category->name,
        'articles' => $category->articles,
        // 'category' =>$category->name
    ]);
});

Route::get('/authors/{user:slug}', function(User $user) {
    return view('article', [
        'title' =>"Articles by ".$user->name,
        'articles' => $user->articles,
        // 'category' =>$category->name
    ]);
});

Route::get('/categories', function(Category $category){
    return view('categories', [
        'title' => 'Article Categories',
        'categories' => Category::all(),
        'kode' => 'categories',
    ]);
});

Route::get('/authors', function(User $user){
    return view('categories', [
        'title' => 'All Authors',
        'categories' => User::all(),
        'kode' =>'authors',
    ]);
})
?>

