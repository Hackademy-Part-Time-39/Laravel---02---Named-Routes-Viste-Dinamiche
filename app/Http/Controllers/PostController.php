<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    //Pagina index (elenco blog)
    public function index () {
        //Dati vista
        $data = [
            'posts' => Post::all()
        ];

        //Tutti gli articoli
        return view('blog.index', $data);
    }

    //Creazione articolo nel database
    public function store (StorePostRequest $request) {
        //Creo record nel database (metodo di default)
        $image = $request->file('image');

        $post = new Post;

        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->image = $request->url . '.' . $image->extension();

        $post->save();

        $path = $image->storeAs( 'public/images', $request->url . '.' . $image->extension() );

        //Mass assignment (richiede fillable nel modello)
        /*Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'url' => $request->url
        ]);*/
        

        //Altro mass assignment (richiede fillable nel modello)
        //Post::create($request->all());

        return redirect('/blog');
    }

    //Pagina creazione articolo
    public function create () {
        //Pagina form di creazione
        return view('blog.create');
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
