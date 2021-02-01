@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'un Cour</div>
          <div class="card-body">
            <form method="POST" action="{{ route('cours.update', $cour->idcours)}}">
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
                    <label for="numero">Select. Classe</label>
                    <select name="numero" class="form-control @error('numero') is-invalid @enderror" id="numero">
                        <option value="{{ $cour->classe->numero }}">{{ $cour->classe->nomclasse }}</option>
                        @foreach ($classes as $classe)
                          @if ($classe->numero != $cour->classe->numero)

                          <option value="{{ $classe->numero }}">{{ $classe->nomclasse }}</option>

                          @endif
                      @endforeach
                    </select>
                    @error('numero')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idec">Select. EC/matiere</label>
                    <select name="idec" class="form-control @error('idec') is-invalid @enderror" id="idec">
                        <option value="{{ $cour->ec->idec }}">{{ $cour->ec->nomec }}</option>
                        @foreach ($ecs as $ec)
                        @if ($ec->idec != $cour->ec->idec)
                        <option value="{{ $ec->idec }}">{{ $ec->nomec }}</option>
                        @endif
                      @endforeach
                    </select>
                    @error('idec')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idsalle">Select. La Salle</label>
                    <select name="idsalle" class="form-control @error('idsalle') is-invalid @enderror" id="idsalle">
                        <option value="{{ $cour->salle->idsalle }}"> {{ $cour->salle->nomsalle }} </option>
                        @foreach ($salles as $salle)
                        @if ($salle->idsalle != $cour->salle->idsalle)

                            <option value="{{ $salle->idsalle }}">{{ $salle->nomsalle }}</option>
                        @endif
                      @endforeach
                    </select>
                    @error('idsalle')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="nomcours">Nom cour</label>
                  <input name="nomcours" value="{{ $cour->nomcours}}" type="text" class="form-control @error('nomcours') is-invalid @enderror" id="nomcours"/>
                    @error('nomcours')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="desccours">Desc cour</label>
                  <input name="desccours" value="{{ $cour->desccours}}" type="text" class="form-control @error('desccours') is-invalid @enderror" id="desccours"/>
                    @error('desccours')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="heuredebut">Heure Debut</label>
                  <input name="heuredebut" value="{{ $cour->heuredebut}}" type="text" class="form-control @error('heuredebut') is-invalid @enderror" id="heuredebut"/>
                    @error('heuredebut')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="heurefin">Heure Fin</label>
                  <input name="heurefin" value="{{ $cour->heurefin}}" type="text" class="form-control @error('heurefin') is-invalid @enderror" id="heurefin"/>
                    @error('heurefin')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="duree">Duree</label>
                  <input name="duree" value="{{ $cour->duree}}" type="number" class="form-control @error('duree') is-invalid @enderror" id="duree"/>
                    @error('duree')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Modifier le cours</button>
            </form>
          </div>
        </div>

    <div>
@endsection
