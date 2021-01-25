@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification d'un Semestre</div>
          <div class="card-body">
            <form method="post" action="{{ route('semestre.update', $semestre->idsemestre)}}">
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
                  <label for="anneescolaire">Annee Scolaire</label>

                  <select name="idanneescolaire" class="form-control @error('idanneescolaire') is-invalid @enderror" id="idanneescolaire">
                    @foreach ($annees as $annee)
                        <option value="{{ $annee->idannescolaire }}">{{ $annee->anneescolaire }}</option>
                    @endforeach
                  </select>
                  @error('anneescolaire')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="libellesemestre">libelle semestre</label>
                    <input name="libellesemestre" value="{{ $semestre->libellesemestre }}" class="form-control @error('libellesemestre') is-invalid @enderror" id="libellesemestre">
                    @error('libellesemestre')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="datedebut">Date Debut</label>
                    <input type="date" name="datedebut" value="{{ $semestre->datedebut }}" class="form-control @error('datedebut') is-invalid @enderror" id="datedebut" placeholder="Entrer l'annee">
                    @error('datedebut')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="datefin">Date Fin</label>
                    <input type="date" name="datefin" value="{{ $semestre->datefin }}" class="form-control @error('datefin') is-invalid @enderror" id="datefin" placeholder="Entrer l'annee">
                    @error('datefin')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Modifier le semestre</button>
            </form>
          </div>
        </div>

    <div>
@endsection
