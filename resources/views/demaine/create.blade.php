@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'un Domaine</div>
          <div class="card-body">
            <form method="POST" action="{{ route('domaine.store')}}">
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
                  <label for="anneescolaire">Domaine</label>
                  <input type="text" name="nomdomaine" class="form-control @error('nomdomaine') is-invalid @enderror" id="nomdomaine" placeholder="Entrer le domaine">
                    @error('nomdomaine')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter le domaine</button>
            </form>
          </div>
        </div>

    <div>
@endsection
