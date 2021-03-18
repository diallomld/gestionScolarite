@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout des etudiants </div>
          <div class="card-body">
            <form method="POST" action="{{ route('etudiant.store')}}">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  }} --}}
                @csrf
                <div class="form-group">
                  <label for="nometudiant">Nom</label>
                  <input type="text" name="nom" class="form-control @error('nometudiant') is-invalid @enderror" id="nometudiant" placeholder="Entrer votre nom">
                    @error('nometudiant')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="prenometudiant">prenom</label>
                  <input type="text" name="prenom" class="form-control @error('prenometudiant') is-invalid @enderror" id="prenometudiant" placeholder="Entrer votre prenom">
                    @error('prenometudiant')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idanneescolaire">Nationnalite</label>
                    <select name="idnationnalite" class="form-control @error('idanneescolaire') is-invalid @enderror" id="idanneescolaire">
                      @foreach ($nationnalites as $nationnalite)
                          <option value="{{ $nationnalite->idnationnalite }}">{{ $nationnalite->nom }}</option>
                      @endforeach
                    </select>
                    @error('idanneescolaire')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" class="form-control @error('adresse') is-invalid @enderror" id="adresse" placeholder="Entrer l'adresse">
                    @error('adresse')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Entrer le numero de telephone">
                    @error('telephone')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone Tuteur</label>
                    <input type="text" name="teltuteur" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Entrer le numero du tuteur">
                    @error('telephone')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nomtuteur">Nom Tuteur</label>
                    <input type="text" name="nomtuteur" class="form-control @error('nomtuteur') is-invalid @enderror" id="nomtuteur" placeholder="Entrer le nom du tuteur">
                    @error('nomtuteur')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="datenaissance">Date Naissance</label>
                    <input type="date" name="datenaissance" class="form-control @error('datenaissance') is-invalid @enderror" id="datenaissance" placeholder="Entrer la date de naissance">
                    @error('datenaissance')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lieu">Lieu de Naissance</label>
                    <input type="text" name="lieu" class="form-control @error('lieu') is-invalid @enderror" id="lieu" placeholder="Entrer le lieu de naissance">
                    @error('lieu')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" name="genre" class="form-control @error('genre') is-invalid @enderror" id="genre" placeholder="Entrer le genre">
                    @error('genre')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telephone">Disponibilite</label>
                    <input type="text" name="disponibilite" class="form-control @error('disponibilite') is-invalid @enderror" id="disponibilite" placeholder="Disponibilite">
                    @error('disponibilite')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter l'etudiant</button>
            </form>
          </div>
        </div>

    <div>
@endsection
