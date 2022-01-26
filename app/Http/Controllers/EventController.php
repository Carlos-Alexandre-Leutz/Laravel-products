<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento; // registrnando o model que eu vou usar aqui
use App\Models\Imagem; // registrnando o model de img


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

        return view('evento', ['nome' => $events]);
    }
    public function viewImg()
    {
       $imagem = Imagem::all();
       return view('enviaImg', ['imagens' => $imagem])->with("msg", 'Salvo com sucesso!');
    }

    public function store(Request $request)
    {
        $events = new Evento; //cria uma nova intancia da model
        $events->titulo = $request->titulo;
        $events->Descricao = $request->Descricao;
        $events->confirmado = $request->confirmado;

        $events->save(); // usando o metodo save no obj istanciado da model

        $events = Evento::all();

        return view('evento', ['nome' => $events])->with("msg", 'Salvo com sucesso!');
    }
    public function img(Request $request)
    {
        $imagem = new Imagem;
        $imagem->imagem = $request->imagem;

        if ($request->hasFile("imagem") &&  $request->file("imagem")->isValid()) {

            $requestImg =  $request->imagem;
            $extencao = $requestImg->extension();
            $imagemName = md5($requestImg->getClientOriginalName() . strtotime("now")) . "." . $extencao;
            // adicionadno arquivo ao MD5 para crar um rech do nome, e esta concatenando o nome cam a data que foi enviado +  a extenção

            // aqui salva a img no servidor
            $requestImg->move(public_path("img/downloads"), $imagemName);

            //aqui retorna o nome do arquivo pra ser salvo pelo banco
            $imagem->imagem = $imagemName;

        }



        $imagem->save(); // usando o metodo save no obj istanciado da model

        $events = Evento::all();

        return view('enviaImg', ['imagens' => $imagem])->with("msg", 'Salvo com sucesso!');
    }
    public function teste() {
      
        $teste = [(object)[
            "label" => "Seguindo",
            "color" => "#aad874"            
        ]];
        
        return response()->json($teste);
    } 
}
