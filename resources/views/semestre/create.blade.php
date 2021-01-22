@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'un semestre</div>
          <div class="card-body">
            <form method="POST" action="{{ route('semestre.store')}}">
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
                  <label for="anneescolaire">Libelle Semestre</label>
                  <input type="text" name="libellesemestre" class="form-control @error('libellesemestre') is-invalid @enderror" id="libellesemestre" placeholder="Entrer l'annee">
                    @error('libellesemestre')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idanneescolaire">L'annee scolaire</label>
                    <select name="idanneescolaire" class="form-control @error('idanneescolaire') is-invalid @enderror" id="idanneescolaire">
                      @foreach ($annees as $annee)
                          <option value="{{ $annee->idannescolaire }}">{{ $annee->anneescolaire }}</option>
                      @endforeach
                    </select>
                    @error('idanneescolaire')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="datedebut">Date Debut</label>
                    <input type="date" name="datedebut" class="form-control @error('datedebut') is-invalid @enderror" id="datedebut" placeholder="Entrer l'annee">
                    @error('datedebut')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="datefin">Date Fin</label>
                    <input type="date" name="datefin" class="form-control @error('datefin') is-invalid @enderror" id="datefin" placeholder="Entrer l'annee">
                    @error('datefin')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter le semestre</button>
            </form>
          </div>
        </div>

    <div>
@endsection
