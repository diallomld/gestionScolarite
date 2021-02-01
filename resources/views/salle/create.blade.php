@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'un salle</div>
          <div class="card-body">
            <form method="POST" action="{{ route('salle.store')}}">
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
                  <label for="nomsalle">Nom Salle</label>
                  <input type="text" name="nomsalle" class="form-control @error('nomsalle') is-invalid @enderror" id="nomsalle" placeholder="Entrer le nom de la salle">
                    @error('nomsalle')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="capacite">Capacite</label>
                  <input type="text" name="capacite" class="form-control @error('capacite') is-invalid @enderror" id="nomsalle" placeholder="Entrer la capacite de la salle">
                    @error('capacite')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter une salle</button>
            </form>
          </div>
        </div>

    <div>
@endsection
