@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification des absence</div>
          <div class="card-body">
            <form method="post" action="{{ route('absence.update', $absence->idabsence)}}">
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
                    <label for="motif">Motif</label>
                    <input name="motif" value="{{ $absence->motif }}" class="form-control @error('motif') is-invalid @enderror" id="motif">
                    @error('motif')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dateabsence">Date absence</label>
                    <input name="dateabsence" value="{{ $absence->dateabsence }}" class="form-control @error('dateabsence') is-invalid @enderror" id="dateabsence">
                    @error('dateabsence')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="anneescolaire">Cours</label>
  
                    <select name="idcours" class="form-control @error('idec') is-invalid @enderror" id="idec">
                      <option value="{{ $absence->cour->idcours }}">{{ $absence->cour->nomcours }}</option>
                      @foreach ($cours as $cour)
                      @if($absence->cour->nomcours != $cour->nomcours )
                      <option value="{{ $cour->idcours }}">{{ $cour->nomcours }}</option>
                    @endif
                      @endforeach
                    </select>
                    @error('idcours')
                          <div class="alert alert-danger"> {{$message}} </div>
                      @enderror
                  </div>
                    <select name="matricule" class="form-control @error('matricule') is-invalid @enderror" id="matricule">
                      <option value="{{ $absence->etudiant->matricule }}"> {{ $absence->etudiant->prenom }} {{ $absence->etudiant->nom }}</option>
                      @foreach ($etudiants as $etudiant)
                      @if($absence->etudiant->nom != $etudiant->nom )
                      <option value="{{ $etudiant->matricule }}">{{ $etudiant->prenom }} {{ $etudiant->nom }}</option>
                    @endif
                      @endforeach
                    </select>
                    @error('etudiant')
                          <div class="alert alert-danger"> {{$message}} </div>
                      @enderror
                  </div>
                <button type="submit" class="btn btn-primary">Modifier l'absence</button>
            </form>
          </div>
        </div>
    <div>
@endsection
