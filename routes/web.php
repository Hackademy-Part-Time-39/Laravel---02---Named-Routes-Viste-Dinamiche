<?php

use Illuminate\Support\Facades\Route;

//ROTTA HOME PAGE
Route::get('/', function () {
    return view('home');
})
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
Route::get('/blog', function () {
    return view('blog', [
        'title_tag' => 'Gli ultimi articoli e novità',
        'paragraph' => 'Test',
        'page_title' => 'Blog abc',
        'posts' => [
            [
                'id' => '1',
                'title' => 'Titolo 1 abc',
                'content' => 'Descrizione 1',
                'url' => 'titolo-1'
            ],
            [
                'id' => '2',
                'title' => 'Titolo 2',
                'content' => 'Descrizione 2',
                'url' => 'titolo-2'
            ],
            [
                'id' => '3',
                'title' => 'Titolo 3',
                'content' => 'Descrizione 3',
                'url' => 'titolo-3'
            ],
            [
                'id' => '4',
                'title' => 'Titolo 4',
                'content' => 'Descrizione 4',
                'url' => 'titolo-4'
            ]
        ]
    ]);
})
->name('blog');

//PAGINA ARTICOLO
Route::get('/blog/{url}/{id}', function ($url, $id) {
    return view('blog-single', [
        'current_id' => $id,
        'posts' => [
            [
                'id' => '1',
                'title' => 'Titolo 1 abc',
                'content' => 'Descrizione 1',
                'url' => 'titolo-1'
            ],
            [
                'id' => '2',
                'title' => 'Titolo 2',
                'content' => 'Descrizione 2',
                'url' => 'titolo-2'
            ],
            [
                'id' => '3',
                'title' => 'Titolo 3',
                'content' => 'Descrizione 3',
                'url' => 'titolo-3'
            ],
            [
                'id' => '4',
                'title' => 'Titolo 4',
                'content' => 'Descrizione 4',
                'url' => 'titolo-4'
            ]
        ]
    ]);
})
->name('article');