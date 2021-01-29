@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification d'une inscription</div>
          <div class="card-body">
            <form method="POST" action="{{ route('inscription.update', $inscription)}}">
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
                @method('PUT')
                <div class="form-group">
                    <label for="matricule">Select. Matricule etudiant</label>
                    <select name="matricule" class="form-control @error('matricule') is-invalid @enderror" id="matricule">
                        <option value="{{$inscription->etudiant->matricule}}">{{$inscription->etudiant->nom}}</option>
                    </select>
                    @error('matricule')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="numero">Select. Classe</label>
                    <select name="numero" value="{{ old('numeo') }}" class="form-control @error('numero') is-invalid @enderror" id="numero">

                        <option value="{{$inscription->classe->numero}}"> {{ $inscription->classe->nomclasse }}</option>

                        @foreach ($classes as $classe)

                            @if ($classe->numero != $inscription->classe->numero )

                                <option value="{{ $classe->numero }}">{{ $classe->nomclasse }}</option>

                            @endif
                        @endforeach

                    </select>
                    @error('numero')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idannescolaire">Select. Annee scolaire</label>
                    <select name="idannescolaire" value="{{ old('numeo') }}" class="form-control @error('idannescolaire') is-invalid @enderror" id="idannescolaire">


                        <option value="{{ $inscription->annee->idannescolaire }}">{{$inscription->annee->anneescolaire}}</option>

                        @foreach ($annees as $annee)

                            @if ($annee->idannescolaire != $inscription->annee->idannescolaire)

                             <option value="{{ $annee->idannescolaire }}">{{ $annee->anneescolaire }}</option>

                            @endif
                      @endforeach
                    </select>
                    @error('idannescolaire')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="dateinscription">Date d'inscription</label>
                  <input name="dateinscription" value="{{ $inscription->dateinscription }}" type="date" class="form-control @error('dateinscription') is-invalid @enderror" id="dateinscription"/>
                    @error('dateinscription')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Modifié une inscription</button>
            </form>
          </div>
        </div>

    <div>
@endsection
