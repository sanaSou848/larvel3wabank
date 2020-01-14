@extends('layouts/app')
@section('contenu')

@if (session('successDelete'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successDelete') }}
        </div>
@endif


<a href="{{route('client.create')}}" class="btn btn-ifo">Add Client</a>
    <div class="title m-b-md">
    	@if(count($clients)>0)
    	<ul class="list-group">
    		@foreach ($clients as $cls)
    		<li class="list-group-item">
    			<a href="{{route('client.show',['client' => $cls->id])}}">{{$cls->prenom}}</a>
    			<p class ="small">{{$cls->tel}}</p>
    		</li>
    		@endforeach
    		<div class="py-3">
    			{{ $clients->links() }}
    		</div>
    	</ul>
    	@else
    		<h2 class="text-center py-4"> il n'y a pas de clients</h2>
        @endif
    </div>
@endsection

