<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index (){
        $busca = request('search');// <-- pega a request
        return view('busca', ['busca' => $busca]);
    }
    public function create (){
             return view('events.create');
    }
}
