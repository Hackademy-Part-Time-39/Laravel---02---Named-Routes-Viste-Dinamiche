<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

//ROTTA HOME PAGE
Route::get('/', [HomeController::class, 'index'])
->name('home.index');

//ROTTA PORTFOLIO
Route::get('/portfolio', [WorkController::class, 'index'])
->name('portfolio.index');

//ROTTA PAGINA CREAZIONE LAVORO
Route::get('/portfolio/nuovo', [WorkController::class, 'create'])
->name('portfolio.create');

//ROTTA CREAZIONE LAVORO NEL DATABASE
Route::post('/portfolio/nuovo', [WorkController::class, 'store'])
->name('portfolio.store');

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

//PAGINA CREAZIONE ARTICOLO
Route::get('/blog/nuovo', [PostController::class, 'create'])
->name('blog.create')
->middleware(['auth']);

//CREAZIONE ARTICOLO NEL DATABASE
Route::post('/blog/nuovo', [PostController::class, 'store'])
->name('blog.store');

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

//PAGINA CONTATTI
Route::get('/contatti', [ContactController::class, 'index'])
->name('contatti.index');

//SUBMIT FORM CONTATTI
Route::post('/contatti', [ContactController::class, 'submit'])
->name('contatti.submit');

//CONFERMA INVIO FORM CONTATTI
Route::get('/conferma-invio-messaggio', [ContactController::class, 'confirmation'])
->name('contatti.confirmation');

//PAGINA PROFILO
Route::get('/profilo', [ProfileController::class, 'index'])
->name('auth.profile')
->middleware(['verified', 'auth']);