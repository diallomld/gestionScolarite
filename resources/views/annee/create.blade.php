@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Ajouter une Annee scolaire</div>
          <div class="card-body">
            <form method="POST" action="{{ route('annee.store')}}">
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
                  <label for="anneescolaire">Annee Scolaire</label>
                  <input type="text" name="anneescolaire" class="form-control @error('anneescolaire') is-invalid @enderror" id="anneescolaire" placeholder="Entrer l'annee">
                    @error('anneescolaire')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="statut">Statut</label>
                    <select name="statut" class="form-control @error('statut') is-invalid @enderror" id="statut">
                      <option>En cours</option>
                      <option>Termine</option>
                      <option>Non valide</option>
                      @error('statut')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary">Ajouter l'annee</button>
            </form>
          </div>
        </div>

    <div>
@endsection
