@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left" >
            <div class="card-header">Formulaire d'une inscription</div>
          <div class="card-body">
            <form method="POST" action="{{ route('inscription.store')}}">
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
                    <label for="matricule">Select. Matricule etudiant</label>
                    <select name="matricule" class="form-control @error('matricule') is-invalid @enderror" id="matricule">
                      @foreach ($etudiants as $etudiant)
                          <option value="{{ $etudiant->matricule }}">{{ $etudiant->genre=='masculin'? 'M'.' '.$etudiant->prenom.' '.$etudiant->nom.', ne(é) le '. \Carbon\Carbon::parse($etudiant->datenaissance)->format('d/m/Y').' à '. $etudiant->lieu:'Mme'.' '.$etudiant->prenom.' '.$etudiant->nom.', ne(é) le '. \Carbon\Carbon::parse($etudiant->datenaissance)->format('d/m/Y').' à '. $etudiant->lieu  }}</option>
                      @endforeach
                    </select>
                    @error('matricule')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="numero">Select. Classe</label>
                    <select name="numero" value="{{ old('numeo') }}" class="form-control @error('numero') is-invalid @enderror" id="numero">
                      @foreach ($classes as $classe)
                          <option value="{{ $classe->numero }}">{{ $classe->nomclasse}}</option>
                      @endforeach
                    </select>
                    @error('numero')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idannescolaire">Select. L'annee scolaire</label>
                    <select name="idannescolaire" value="{{ old('numeo') }}" class="form-control @error('idannescolaire') is-invalid @enderror" id="idannescolaire">
                      @foreach ($annees as $anne)
                          <option value="{{ $anne->idannescolaire }}">{{ $anne->anneescolaire }}</option>
                      @endforeach
                    </select>
                    @error('idannescolaire')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ajouter une inscription</button>
            </form>
          </div>
        </div>

    <div>
@endsection
