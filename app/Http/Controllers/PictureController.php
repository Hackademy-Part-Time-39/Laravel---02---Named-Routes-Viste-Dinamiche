<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PictureController extends Controller
{
    //Pagina elenco
    public function index () {
        //Dati
        $data = [
            'pictures' => [
                [
                    'id' => '1',
                    'title' => 'Titolo immagine 1',
                    'description' => 'Descrizione 1',
                    'slug' => 'titolo-immagine-1',
                    'url' => 'https://images.unsplash.com/photo-1719090024525-667c8fcf5bb9'
                ],
                [
                    'id' => '2',
                    'title' => 'Titolo immagine 2',
                    'description' => 'Descrizione 2',
                    'slug' => 'titolo-immagine-2',
                    'url' => 'https://images.unsplash.com/photo-1719090024525-667c8fcf5bb9'
                ],
                [
                    'id' => '3',
                    'title' => 'Titolo immagine 3',
                    'description' => 'Descrizione 3',
                    'slug' => 'titolo-immagine-3',
                    'url' => 'https://images.unsplash.com/photo-1719090024525-667c8fcf5bb9'
                ]
            ]
        ];

        //Vista pagina elenco
        return view('gallery.index', $data);
    }

    //Pagina dettaglio
    public function show ($url, $id) {
        //Dati
        $data = [
            'current_id' => $id,
            'pictures' => [
                [
                    'id' => '1',
                    'title' => 'Titolo immagine 1',
                    'description' => 'Descrizione 1',
                    'slug' => 'titolo-immagine-1',
                    'url' => 'https://images.unsplash.com/photo-1719090024525-667c8fcf5bb9'
                ],
                [
                    'id' => '2',
                    'title' => 'Titolo immagine 2',
                    'description' => 'Descrizione 2',
                    'slug' => 'titolo-immagine-2',
                    'url' => 'https://images.unsplash.com/photo-1719090024525-667c8fcf5bb9'
                ],
                [
                    'id' => '3',
                    'title' => 'Titolo immagine 3',
                    'description' => 'Descrizione 3',
                    'slug' => 'titolo-immagine-3',
                    'url' => 'https://images.unsplash.com/photo-1719090024525-667c8fcf5bb9'
                ]
            ]
        ];

        //Vista pagina dettaglio
        return view('gallery.show', $data);
    }
}
