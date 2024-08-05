<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\ProductController;

//ROTTA HOME PAGE
Route::get('/', [HomeController::class, 'index'])
->name('home.index');

//ROTTA PORTFOLIO
Route::get('/portfolio', [WorkController::class, 'index'])
->name('portfolio.index');

//ROTTA LAVORO SINGOLO
Route::get('/portfolio/{url}/{id}', [WorkController::class, 'show'])
->name('portfolio.show');

//ROTTA GALLERY
Route::get('/gallery', [PictureController::class, 'index'])
->name('gallery.index');

//ROTTA IMMAGINE SINGOLA
Route::get('/gallery/{url}/{id}', [PictureController::class, 'show'])
->name('gallery.show');

//PAGINA BLOG
Route::get('/blog', [PostController::class, 'index'])
->name('blog.index');

//PAGINA ARTICOLO
Route::get('/blog/{url}/{id}', [PostController::class, 'show'])
->name('blog.show');

//PAGINA PRODOTTI
Route::get('/prodotti', [ProductController::class, 'index'])
->name('prodotti.index');

//PAGINA PRODOTTO SINGOLO
Route::get('/prodotti/{url}/{id}', [ProductController::class, 'show'])
->name('prodotti.show');

//PAGINA OFFERTE DI LAVORO
Route::get('/offerte-di-lavoro', [JobController::class, 'index'])
->name('lavori.index');

//PAGINA OFFERTA DI LAVORO SINGOLA
Route::get('/offerte-di-lavoro/{url}/{id}', [JobController::class, 'show'])
->name('lavori.show');