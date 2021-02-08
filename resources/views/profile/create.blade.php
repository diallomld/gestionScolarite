@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout de profile</div>
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
                  <label for="profile">Nom profile</label>
                  <input type="text" name="nomprofile" class="form-control @error('nomprofile') is-invalid @enderror" id="nomprofile" placeholder="Entrer le profile">
                    @error('nomprofile')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Ajouter la profile</button>
            </form>
          </div>
        </div>

    <div>
@endsection
