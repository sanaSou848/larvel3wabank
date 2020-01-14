<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$clients = Client::all();
        $clients = Client::orderBy('prenom')->paginate(10);
        return  view('client/index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $client = new Client;
        return view('client.create',compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
       $data = $this->validate($request,$this->validationRules());

       $client = Client::create($data);
       //dd($client);
       $this->uplodeImage($client);
       return redirect()->route('client.show', $client)->with('successNewClient', 'client ajouté avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
        /*$comptes = $client->comptes;
        return $comptes;*/
        return view('client.show')->with('client',$client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
        return view('client.edit')->with('client',$client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)//
    {
        $data = $this->validate($request,$this->validationRules());
        $client->update($data);
        $this->uplodeImage($client);
        return redirect()->route('client.show', $client)->with('successNewClient', 'client modifié avec succés');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //

        $client->delete();
        return redirect()->route('client.index')->with('successDelete','Client supprmier avec succés');
    }

    private function validationRules()
    {
        return['nom' =>'required|max:50|min:2',
        'prenom'  =>'required|max:50|min:2',
        'dateNaissance'  =>'required|date' ,
        'adresse' =>'required|max:70|min:10',
        'tel' =>'required|digits:8',
        'image'=>'sometimes|file|image'];
    }


    private function uplodeImage($client)
    {
        if(request()->has('image'))
        {
            $client->update(['image' =>request()->image->store('uplodas','public')]);
        }
    }
}
