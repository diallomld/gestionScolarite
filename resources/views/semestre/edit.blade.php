@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification d'une Annee scolaire</div>
          <div class="card-body">
            <form method="post" action="{{ route('annee.update', $annee->idannescolaire)}}">
                @csrf
                @method('PUT')
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  }} --}}

                <div class="form-group">
                  <label for="anneescolaire">Annee Scolaire</label>
                  <input type="text" name="anneescolaire" value="{{ $annee->anneescolaire }}" class="form-control @error('anneescolaire') is-invalid @enderror" id="anneescolaire" placeholder="Entrer l'annee">
                    @error('anneescolaire')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="statut">Statut</label>
                    <select name="statut" class="form-control @error('statut') is-invalid @enderror" id="statut">

                        @if ($annee->statut=='En cours')

                        <option>{{ $annee->statut }}</option>
                        <option>Termine</option>
                        <option>Non valide</option>
                        @endif
                        @if ($annee->statut=='Termine')

                        <option>{{ $annee->statut }}</option>
                        <option>Non valide</option>
                        <option>En cours</option>

                        @endif
                        @if ($annee->statut=='Non valide')

                        <option>{{ $annee->statut }}</option>
                        <option>Termine</option>
                        <option>En cours</option>

                        @endif

                      @error('statut')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary">Modifier l'annee</button>
            </form>
          </div>
        </div>

    <div>
@endsection
