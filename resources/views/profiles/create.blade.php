@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'un profile</div>
          <div class="card-body">
            <form method="POST" action="{{ route('profile.store')}}">
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
                  <label for="nom">Nom profile</label>
                  <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" id="nom" placeholder="Entrer le nom du profile">
                    @error('nom')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter un profil</button>
            </form>
          </div>
        </div>

    <div>
@endsection
