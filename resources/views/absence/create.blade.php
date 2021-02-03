@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout des absence </div>
          <div class="card-body">
            <form method="POST" action="{{ route('absence.store')}}">
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
                  <label for="motif">Motif</label>
                  <input type="text" name="motif" class="form-control @error('motif') is-invalid @enderror" id="motif" placeholder="Motif de l'absence">
                    @error('motif')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="dateabsence">Date absence</label>
                  <input type="date" name="dateabsence" class="form-control @error('dateabsence') is-invalid @enderror" id="dateabsence" placeholder="Entrer votre prenom">
                    @error('dateabsence')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idcours">Cours</label>
                    <select name="idcours" class="form-control @error('idcours') is-invalid @enderror" id="idcours">
                      @foreach ($cours as $cour)
                          <option value="{{ $cour->idcours }}">{{ $cour->nomcours}}</option>
                      @endforeach
                    </select>
                    @error('idcours')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="matricule">etudiant</label>
                    <select name="matricule" class="form-control @error('matricule') is-invalid @enderror" id="matricule">
                      @foreach ($etudiants as $etudiant)
                          <option value="{{ $etudiant->matricule}}">{{ $etudiant->prenom }} {{ $etudiant->nom }} </option>
                      @endforeach
                    </select>
                    @error('matricule')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter l'absence</button>
            </form>
          </div>
        </div>

    <div>        
@endsection
