@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification d'un nationnalite</div>
          <div class="card-body">
            <form method="post" action="{{ route('etudiant.update', $etudiant->matricule)}}">
                @csrf
                @method('PUT')
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  }} --}}


                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input name="nom" value="{{ $etudiant->nom }}" class="form-control @error('nom') is-invalid @enderror" id="libelleetudiant">
                    @error('nom')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nom">Prenom</label>
                    <input name="prenom" value="{{ $etudiant->nom }}" class="form-control @error('nom') is-invalid @enderror" id="libelleetudiant">
                    @error('nom')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="anneescolaire">Nationnalite</label>

                    <select name="idnationnalite" class="form-control @error('idanneescolaire') is-invalid @enderror" id="idanneescolaire">
                      <option value="{{ $etudiant->nationnalite->idnationnalite }}">{{ $etudiant->nationnalite->nom }}</option>
                      @foreach ($nationnalites as $nationnalite)
                      @if($etudiant->nationnalite->nom != $nationnalite->nom )
                      <option value="{{ $nationnalite->idnationnalite }}">{{ $nationnalite->nom }}</option>
                    @endif
                      @endforeach
                    </select>
                    @error('anneescolaire')
                          <div class="alert alert-danger"> {{$message}} </div>
                      @enderror
                  </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input name="adresse" value="{{ $etudiant->adresse }}" class="form-control @error('adresse') is-invalid @enderror" id="libelleetudiant">
                    @error('adresse')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telephone">Telelphone</label>
                    <input name="telephone" value="{{ $etudiant->telephone }}" class="form-control @error('telephone') is-invalid @enderror" id="libellenationnalite">
                    @error('telephone')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="teltuteur">Telephone Tuteur</label>
                    <input name="teltuteur" value="{{ $etudiant->teltuteur }}" class="form-control @error('teltuteur') is-invalid @enderror" id="libelleetudiant">
                    @error('teltuteur')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nomtuteur">Nom Tuteur</label>
                    <input name="nomtuteur" value="{{ $etudiant->nomtuteur }}" class="form-control @error('nomtuteur') is-invalid @enderror" id="libelleetudiant">
                    @error('nomtuteur')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="datenaissance">Date Naissance</label>
                    <input type="date" name="datenaissance" value="{{ $etudiant->datenaissance }}" class="form-control @error('datenaissance') is-invalid @enderror" id="libelleetudiant">
                    @error('datenaissance')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lieu">Lieu Naissance</label>
                    <input type="text" name="lieu" value="{{ $etudiant->lieu }}" class="form-control @error('lieu') is-invalid @enderror" id="libelleetudiant">
                    @error('lieu')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" name="genre" value="{{ $etudiant->genre }}" class="form-control @error('genre') is-invalid @enderror" id="genre" placeholder="Entrer l'annee">
                    @error('genre')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="disponibilite">Disponibilite</label>
                    <input type="text" name="disponibilite" value="{{ $etudiant->disponibilite }}" class="form-control @error('disponibilite') is-invalid @enderror" id="disponibilite" placeholder="Entrer l'annee">
                    @error('disponibilite')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Modifier l'etudiant</button>
            </form>
          </div>
        </div>

    <div>
@endsection
