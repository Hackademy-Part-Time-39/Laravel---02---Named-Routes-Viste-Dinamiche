<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Requests\StoreWorkRequest;

class WorkController extends Controller
{
    //Pagina elenco
    public function index () {
        //Dati
        $data = [
            'title_tag' => 'Gli ultimi lavori',
            'page_title' => 'Lavori svolti',
            'works' => Work::all()
        ];

        //Vista pagina elenco
        return view('portfolio.index', $data);
    }

    //Pagina creazione lavoro
    public function create () {
        return view('portfolio.create');
    }

    //Salvataggio lavoro nel database
    public function store (StoreWorkRequest $request) {
        //Ottengo l'immagine
        $image = $request->file('image');

        $imageName = $request->url . '.' . $image->extension();

        //Salvo il record
        $work = new Work;

        $work->title = $request->title;
        $work->content = $request->content;
        $work->url = $request->url;
        $work->image = $imageName;

        $image->storeAs('public/images', $imageName);

        $work->save();

        return redirect('/portfolio');
    }

    //Pagina dettaglio
    public function show ($url, $id) {
        //Dati
        $data = [
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
        ];

        //Vista pagina dettaglio
        return view('portfolio.show', $data);
    }
}
