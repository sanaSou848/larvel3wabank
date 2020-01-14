@csrf

<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nom" value="{{old('nom') ?? $client->nom}}">
    @error('nom')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prenom" value="{{old('prenom') ?? $client->prenom}}">
    @error('prenom')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">date Naissance</label>
    <input type="Date" class="form-control" id="exampleInputPassword1" name="dateNaissance" value="{{old('dateNaissance') ?? $client->dateNaissance}}">
    @error('daten')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">adresse</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="adresse" value="{{old('adresse') ?? $client->adresse}}">
    @error('adresse')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>



   <div class="form-group">
    <label for="exampleInputPassword1">Telephone</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tel" value="{{ old('tel') ?? $client->tel}}">
    @error('tel')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>

  <div class="form-group">
    <label for="image">Telephone</label>
    <input type="file" class="form-control" id="image" name="image" value="{{ old('image') ?? $client->image}}">
    @error('image')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>








  
  <button type="submit" class="btn btn-success">enregister</button>
  <button type="reset" class="btn btn-warning">annuler</button>