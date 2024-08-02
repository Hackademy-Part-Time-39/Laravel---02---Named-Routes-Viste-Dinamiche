<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//ROTTA HOME PAGE
Route::get('/', [HomeController::class, 'index'])
->name('index');

//ROTTA PORTFOLIO
Route::get('/portfolio', function () {
    return view('portfolio', [
        'title_tag' => 'Gli ultimi lavori',
        'page_title' => 'Lavori svolti',
        'works' => [
            [
                'id' => '1',
                'title' => 'Lavoro 1',
                'content' => 'Lavoro 1',
                'url' => 'lavoro-1'
            ],
            [
                'id' => '2',
                'title' => 'Lavoro 2',
                'content' => 'Lavoro 2',
                'url' => 'lavoro-2'
            ],
            [
                'id' => '3',
                'title' => 'Lavoro 3',
                'content' => 'Lavoro 3',
                'url' => 'lavoro-3'
            ]
        ]
    ]);
})
->name('portfolio');

//ROTTA LAVORO SINGOLO
Route::get('/portfolio/{url}/{id}', function ($url, $id) {
    return view('single-work', [
        'title_tag' => 'Dettaglio lavoro',
        'current_id' => $id,
        'works' => [
            [
                'id' => '1',
                'title' => 'Lavoro 1',
                'content' => 'Lavoro 1',
                'url' => 'lavoro-1'
            ],
            [
                'id' => '2',
                'title' => 'Lavoro 2',
                'content' => 'Lavoro 2',
                'url' => 'lavoro-2'
            ],
            [
                'id' => '3',
                'title' => 'Lavoro 3',
                'content' => 'Lavoro 3',
                'url' => 'lavoro-3'
            ]
        ]
    ]);
})
->name('work');

//ROTTA GALLERY
Route::get('/gallery', function () {
    return view('gallery');
})
->name('gallery');

//PAGINA BLOG
Route::get('/blog', [PostController::class, 'index'])
->name('blog');

//PAGINA ARTICOLO
Route::get('/blog/{url}/{id}', [PostController::class, 'show'])
->name('article');