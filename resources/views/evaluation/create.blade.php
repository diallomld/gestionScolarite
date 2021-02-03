@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout des etudiants </div>
          <div class="card-body">
            <form method="POST" action="{{ route('evaluation.store')}}">
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
                  <label for="dateevaluation">Date Evaluation</label>
                  <input type="date" name="dateevaluation" class="form-control @error('dateevaluation') is-invalid @enderror" id="dateevaluation" placeholder="Entrer la date evaluation">
                    @error('dateevaluation')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="typeevaluation">Type Evaluation</label>
                  <input type="text" name="typeevaluation" class="form-control @error('typeevaluation') is-invalid @enderror" id="typeevaluation" placeholder="Entrer votre prenom">
                    @error('typeevaluation')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idec">Ec</label>
                    <select name="idec" class="form-control @error('idec') is-invalid @enderror" id="idec">
                      @foreach ($ecs as $ec)
                          <option value="{{ $ec->idec }}">{{ $ec->nomec }}</option>
                      @endforeach
                    </select>
                    @error('idec')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="numero">classe</label>
                    <select name="numero" class="form-control @error('numero') is-invalid @enderror" id="numero">
                      @foreach ($classes as $classe)
                          <option value="{{ $classe->numero }}">{{ $classe->nomclasse }}</option>
                      @endforeach
                    </select>
                    @error('numero')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter l'evaluation</button>
            </form>
          </div>
        </div>

    <div>
@endsection
