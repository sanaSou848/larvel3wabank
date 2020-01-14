@extends('layouts/app')
@section('contenu')
    <div class="jumbotron">
        <h1> {{$titre}} </h1>
     </div>    

         <ul class="list-group">
         @foreach ($listofservices as $service) 



                        
                            <li class="list-group-item">{{ $service }}</li>
                        
                    @endforeach 
                    </ul>
         
   
@endsection 