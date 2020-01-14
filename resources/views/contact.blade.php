@extends('layouts/app')
@section('contenu')
<h2>Contact Us</h2>
    <form action="{{route('contactMessage')}}" method="post">
  @csrf

  <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom" placeholder="nom et prenom"> 
      @error('nom')
       <p class="text-danger">{{ $message}}</p>
      @enderror
  </div>
  <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="votre mail">  
  </div>
  @error('email')
       <p class="text-danger">{{ $message}}</p>
      @enderror
  <div class="form-group">
    <label for="com">Commentaire</label>
    <textarea class="form-control" name="mycomm" id="com" cols="30" rows="7" placeholder="votre mail"></textarea>
</div>
@error('mycomm')
       <p class="text-danger">{{ $message}}</p>
@enderror


<div class="form-group">
    <input type="submit" value="Envoyer" class="">
</div>
</form> 

@endsection