@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout des nationnalites</div>
          <div class="card-body">
            <form method="POST" action="{{ route('nationnalite.store')}}">
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
                  <label for="nomnationnalite">nationnalite</label>
                  <input type="text" name="nom" class="form-control @error('nomnationnalite') is-invalid @enderror" id="nomnationnalite" placeholder="Entrer la nationnalite">
                    @error('nomnationnalite')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter le nationnalite</button>
            </form>
          </div>
        </div>

    <div>
@endsection
