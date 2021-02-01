@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'un Cours</div>
          <div class="card-body">
            <form method="POST" action="{{ route('cours.store')}}">
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
                    <label for="numero">Select. Classe</label>
                    <select name="numero" class="form-control @error('numero') is-invalid @enderror" id="numero">
                      @foreach ($classes as $classe)
                          <option value="{{ $classe->numero }}">{{ $classe->nomclasse }}</option>
                      @endforeach
                    </select>
                    @error('numero')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idec">Select. EC/matiere</label>
                    <select name="idec" value="{{ old('idec') }}" class="form-control @error('idec') is-invalid @enderror" id="idec">
                      @foreach ($ecs as $ec)
                          <option value="{{ $ec->idec }}">{{ $ec->nomec }}</option>
                      @endforeach
                    </select>
                    @error('idec')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idsalle">Select. La Salle</label>
                    <select name="idsalle" value="{{ old('idsalle') }}" class="form-control @error('idsalle') is-invalid @enderror" id="idsalle">
                      @foreach ($salles as $salle)
                          <option value="{{ $salle->idsalle }}">{{ $salle->nomsalle }}</option>
                      @endforeach
                    </select>
                    @error('idsalle')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="nomcours">Nom cours</label>
                  <input name="nomcours" type="text" class="form-control @error('nomcours') is-invalid @enderror" id="nomcours"/>
                    @error('nomcours')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="desccours">Desc cours</label>
                  <input name="desccours" type="text" class="form-control @error('desccours') is-invalid @enderror" id="desccours"/>
                    @error('desccours')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="heuredebut">Heure Debut</label>
                  <input name="heuredebut" type="text" class="form-control @error('heuredebut') is-invalid @enderror" id="heuredebut"/>
                    @error('heuredebut')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="heurefin">Heure Fin</label>
                  <input name="heurefin" type="text" class="form-control @error('heurefin') is-invalid @enderror" id="heurefin"/>
                    @error('heurefin')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="duree">Duree</label>
                  <input name="duree" type="number" class="form-control @error('duree') is-invalid @enderror" id="duree"/>
                    @error('duree')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter un cours</button>
            </form>
          </div>
        </div>

    <div>
@endsection
