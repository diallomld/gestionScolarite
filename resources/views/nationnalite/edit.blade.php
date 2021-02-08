@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification d'un nationnalite</div>
          <div class="card-body">
            <form method="POST" action="{{ route('nationnalite.update',$nationnalite->idnationnalite)}}">
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
                  <label for="nomnationnalite">Nationnalite</label>
                  <input type="text" name="nom" value="{{ $nationnalite->nom}}" class="form-control @error('nom') is-invalid @enderror" id="nom" placeholder="Entrer le nationnalite">
                    @error('nom')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Modifier le nationnalite</button>
            </form>
          </div>
        </div>

    <div>
@endsection
