<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    //Pagina elenco
    public function index () {
        //Dati
        $data = [
            'page_title' => 'Offerte di lavoro',
            'jobs' => [
                [
                    'id' => '1',
                    'title' => 'Job 1',
                    'content' => 'Job 1',
                    'url' => 'job-1'
                ],
                [
                    'id' => '2',
                    'title' => 'Job 2',
                    'content' => 'Job 2',
                    'url' => 'job-2'
                ],
                [
                    'id' => '3',
                    'title' => 'Job 3',
                    'content' => 'Job 3',
                    'url' => 'job-3'
                ]
            ]
        ];

        return view('lavori.index', $data);
    }

    //Pagina dettaglio
    public function show ($url, $id) {
        //Dati
        $data = [
            'current_id' => $id,
            'jobs' => [
                [
                    'id' => '1',
                    'title' => 'Job 1',
                    'content' => 'Job 1',
                    'url' => 'job-1'
                ],
                [
                    'id' => '2',
                    'title' => 'Job 2',
                    'content' => 'Job 2',
                    'url' => 'job-2'
                ],
                [
                    'id' => '3',
                    'title' => 'Job 3',
                    'content' => 'Job 3',
                    'url' => 'job-3'
                ]
            ]
        ];

        return view('lavori.show', $data);
    }
}
