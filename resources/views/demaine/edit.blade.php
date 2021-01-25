@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification d'un Domaine</div>
          <div class="card-body">
            <form method="POST" action="{{ route('domaine.update',$domaine->iddomaine)}}">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  }} --}}
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="anneescolaire">Domaine</label>
                  <input type="text" name="nomdomaine" value="{{ $domaine->nomdomaine}}" class="form-control @error('nomdomaine') is-invalid @enderror" id="nomdomaine" placeholder="Entrer le domaine">
                    @error('nomdomaine')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Modifier le domaine</button>
            </form>
          </div>
        </div>

    <div>
@endsection
