@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'un semestre</div>
          <div class="card-body">
            <form method="POST" action="{{ route('mention.store')}}">
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
                  <label for="anneescolaire">Nom mention</label>
                  <input type="text" name="nommention" class="form-control @error('nommention') is-invalid @enderror" id="nommention" placeholder="Entrer la mention">
                    @error('nommention')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idmention">Selectionner le domaine</label>
                    <select name="iddomaine" class="form-control @error('iddomaine') is-invalid @enderror" id="iddomaine">
                      @foreach ($domaines as $domaine)
                          <option value="{{ $domaine->iddomaine }}">{{ $domaine->nomdomaine }}</option>
                      @endforeach
                    </select>
                    @error('iddomaine')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter la mention</button>
            </form>
          </div>
        </div>

    <div>
@endsection
