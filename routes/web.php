<?php

use Illuminate\Support\Facades\Route;

//ROTTA HOME PAGE
Route::get('/', function () {
    return view('home');
})
->name('index');

//ROTTA PORTFOLIO
Route::get('/portfolio', function () {
    return view('portfolio');
})
->name('portfolio');

//ROTTA GALLERY
Route::get('/gallery', function () {
    return view('gallery');
})
->name('gallery');

//PAGINA BLOG
Route::get('/blog', function () {
    return view('blog', [
        'title_tag' => 'Gli ultimi articoli e novità',
        'paragraph' => 'Test',
        'page_title' => 'Blog abc',
        'posts' => [
            [
                'id' => '1',
                'title' => 'Titolo 1 abc',
                'content' => 'Descrizione 1'
            ],
            [
                'id' => '2',
                'title' => 'Titolo 2',
                'content' => 'Descrizione 2'
            ],
            [
                'id' => '3',
                'title' => 'Titolo 3',
                'content' => 'Descrizione 3'
            ],
            [
                'id' => '4',
                'title' => 'Titolo 4',
                'content' => 'Descrizione 4'
            ]
        ]
    ]);
})
->name('blog');