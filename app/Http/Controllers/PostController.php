<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Pagina index (elenco blog)
    public function index () {
        //Dati vista
        $data = [
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
        ];

        //Tutti gli articoli
        return view('blog.index', $data);
    }

    //Pagina dettaglio (singolo articolo)
    public function show ($url, $id) {
        //Dati vista
        $data = [
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
        ];

        //Singolo articolo
        return view('blog.show', $data);
    }
}
