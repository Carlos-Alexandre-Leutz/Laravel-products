<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento; // registrnando o model que eu vou usar aqui

class EventController extends Controller
{
    public function index()
    {
        $busca = request('search'); // <-- pega a request
        return view('busca', ['busca' => $busca]);
    }
    public function create()
    {
        return view('events.create');
    }


    
    public function dadosbanco()
    {
        $events = Evento::all();

        return view('evento', ['nome' => $events ]);
    }

    public function store(Request $request)
    {
        $events = new Evento; //cria uma nova intancia da model
        $events->titulo = $request->titulo;
        $events->Descricao = $request->Descricao;
        $events->confirmado = $request->confirmado;

        $events->save(); // usando o metodo save no obj istanciado da model

        $events = Evento::all();

        return view('evento', ['nome' => $events ])->with("msg", 'Salvo com sucesso!');
    }
}
