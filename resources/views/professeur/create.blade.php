@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Ajouter un professeur</div>
          <div class="card-body">
            <form method="POST" action="{{ route('professeur.store')}}">
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
                  <label for="nom">Nom</label>
                  <input type="text" name="nom" value="{{old('nom')}}" class="form-control @error('nom') is-invalid @enderror" id="nom" placeholder="Entrer Nom">
                    @error('nom')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="prenom">Prenom</label>
                  <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" id="prenom" placeholder="Entrer votreprenom">
                    @error('prenom')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="telephone">telephone</label>
                  <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Entrer numero telephone">
                    @error('telephone')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Entrer votre email">
                    @error('email')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Ajouter l'annee</button>
            </form>
          </div>
        </div>

    <div>
@endsection
