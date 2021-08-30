@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'un Partenaire</div>
          <div class="card-body">
            <form method="POST" action="{{ route('partenaire.store')}}">
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
                  <label for="nom">Nom Partenaire</label>
                  <input name="nom" type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" placeholder="entrer nom..."/>
                    @error('nom')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ajouter un Partenaire</button>
            </form>
          </div>
        </div>

    <div>
@endsection
