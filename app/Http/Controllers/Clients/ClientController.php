<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller

{
    public function index (){
        $clientModel = app(Client::class);
        $clients = $clientModel->all();
        // $clients = $clientModel->find(1);
        //$clients = $clientModel->where('cpf',1234567891)->get();
        //dd($clients);

        return view('Clients/index',compact('clients'));

    }

    public function create(){
        return view('Clients/create');
        $clientModel = app(Client::class);
        $client = $clientModel ->create([
            'name'=> 'nome teste2',
            'cpf'=> 1234567891,
            'email'=> 'teste2@dominio.com',
            'active_flag'=> false,
        ]);

        dd($client);
    }
}


