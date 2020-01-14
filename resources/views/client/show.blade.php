@extends('layouts/app')
@section('contenu')

@if (session('successNewClient'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successNewClient') }}
        </div>
@endif





    <div class="title m-b-md">
    	
    	<ul class="list-group">
    		
    		<li class="list-group-item">
    			le nom de client est:{{$client->nom}} {{$client->prenom}}
    		</li>

            <li class="list-group-item">
               date Naissance {{$client->dateNaissance}}
                
            </li>
             <li class="list-group-item">
               adresse {{$client->adresse}}
                
            </li>
            <li class="list-group-item">
               tel {{$client->tel}}
                
            </li>



            <li class="list-group-item">
               <img src="{{asset('storage/'.$client->image)}}">
                
            </li>
    		
    	</ul>
    	  </div>

          <div class="panel footer py-3">
              <a href="{{route('client.edit',['client'=>$client->id])}}" class="btn btn-info">
                  Editer
              </a>
          </div>
          <form action="{{route('client.destroy',['client'=>$client->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>



@endsection