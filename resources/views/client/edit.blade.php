@extends('layouts/app')
@section('contenu')
<fieldset>
    <legend>Editer le client</legend>
    <form action="{{route('client.update',['client'=>$client->id])}}"method="post"><!--$client-->
    	@method('PATCH')
        @include('client.form')
    </form>
</fieldset>
@endsection