@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'une Classe/Groupe</div>
          <div class="card-body">
            <form method="POST" action="{{ route('classe.store')}}">
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
                    <label for="idfiliere">Selectionner la filiere/specialite</label>
                    <select name="idfiliere" class="form-control @error('idfiliere') is-invalid @enderror" id="idfiliere">
                      @foreach ($specialites as $spec)
                          <option value="{{ $spec->idfiliere }}">{{ $spec->nomfiliere }}</option>
                      @endforeach
                    </select>
                    @error('idfiliere')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="nomclasse">nom classe</label>
                  <input name="nomclasse" type="text" class="form-control @error('nomclasse') is-invalid @enderror" id="nomclasse" placeholder="entrer le nom de l'classe..."/>
                    @error('nomclasse')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="fraisscolarite">Frais de Scolarité</label>
                  <input name="fraisscolarite" type="text" class="form-control @error('fraisscolarite') is-invalid @enderror" id="fraisscolarite" placeholder="entrer les frais..."/>
                    @error('fraisscolarite')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ajouter une classe</button>
            </form>
          </div>
        </div>

    <div>
@endsection
