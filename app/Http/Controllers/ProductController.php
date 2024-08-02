<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Pagina elenco
    public function index () {
        //Dati
        $data = [
            'products' => [
                [
                    'id' => '1',
                    'image_url' => 'https://images.unsplash.com/photo-1719090024525-667c8fcf5bb9',
                    'title' => 'Prodotto 1',
                    'description' => 'Prodotto 1',
                    'url' => 'prodotto-1'
                ],
                [
                    'id' => '2',
                    'image_url' => 'https://images.unsplash.com/photo-1719090024525-667c8fcf5bb9',
                    'title' => 'Prodotto 2',
                    'description' => 'Prodotto 2',
                    'url' => 'prodotto-2'
                ],
                [
                    'id' => '3',
                    'image_url' => 'https://images.unsplash.com/photo-1719090024525-667c8fcf5bb9',
                    'title' => 'Prodotto 3',
                    'description' => 'Prodotto 3',
                    'url' => 'prodotto-3'
                ]
            ]
        ];

        //Vista pagina elenco
        return view('prodotti.index', $data);
    }

    //Pagina dettaglio
    public function show ($url, $id) {
        //Dati
        $data = [
            'current_id' => $id,
            'products' => [
                [
                    'id' => '1',
                    'image_url' => 'https://images.unsplash.com/photo-1719090024525-667c8fcf5bb9',
                    'title' => 'Prodotto 1',
                    'description' => 'Prodotto 1',
                    'url' => 'prodotto-1'
                ],
                [
                    'id' => '2',
                    'image_url' => 'https://images.unsplash.com/photo-1719090024525-667c8fcf5bb9',
                    'title' => 'Prodotto 2',
                    'description' => 'Prodotto 2',
                    'url' => 'prodotto-2'
                ],
                [
                    'id' => '3',
                    'image_url' => 'https://images.unsplash.com/photo-1719090024525-667c8fcf5bb9',
                    'title' => 'Prodotto 3',
                    'description' => 'Prodotto 3',
                    'url' => 'prodotto-3'
                ]
            ]
        ];

        //Vista pagina dettaglio
        return view('prodotti.show', $data);
    }
}
