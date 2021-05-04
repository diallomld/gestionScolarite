@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification d'un profile</div>
          <div class="card-body">
            <form method="POST" action="{{ route('profile.update',$profile->id)}}">
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
                    <label for="nom">Nom profile</label>
                    <input type="text" value="{{ $profile->nom }}" name="nom" class="form-control @error('nom') is-invalid @enderror" id="nom" placeholder="Entrer le nom de la profile">
                      @error('nom')
                          <div class="alert alert-danger"> {{$message}} </div>
                      @enderror
                  </div>
                <button type="submit" class="btn btn-primary">Modifier le profile</button>
            </form>
          </div>
        </div>

    <div>
@endsection
