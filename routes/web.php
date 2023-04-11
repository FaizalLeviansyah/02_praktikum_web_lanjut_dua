<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function() {
    return view('about');
});

Route::get('/article/{id}', function($id) {
    return view('article', ['id' => $id]);
});

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);


//Praktikkum 3 No 1
Route::get('/', function () {
    return ('Welcome Home');
});

//Prak 3 No 2
Route::prefix('product')->group(function () {
    Route::get('/productlist1', function () {
    return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
    Route::get('/productlist2', function () {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });
    Route::get('/productlist3', function () {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });
    Route::get('/productlist4', function () {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

//Prak 3 No 3
Route::get('/news/news{id}', function ($id) {
    if ($id == 1 ){
        return redirect('https://www.educastudio.com/news');
    }
    else  {
        return redirect('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
    }
});

//Prak 3 No 4
Route::prefix('program')->group(function () {
    Route::get('/daftarprogram1', function () {
    return redirect('https://www.educastudio.com/program/karir');
    });
    Route::get('/daftarprogram2', function () {
        return redirect('https://www.educastudio.com/program/magang');
    });
    Route::get('/daftarprogram3', function () {
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});

//Praktikum 3 No 5
Route::get('/aboutus', function () {
    return redirect('https://www.educastudio.com/about-us');
});

//Praktikum 3 No 6
Route::resource('contactus', PageController::class)->only([
    'contactus'
]);