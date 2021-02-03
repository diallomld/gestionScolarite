@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification d'un paiement</div>
          <div class="card-body">
            <form method="POST" action="{{ route('paiement.update', $paiement->idpaiement)}}">
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
                @method('PUT')
                <div class="form-group">
                    <label for="matricule">Select. Matricule etudiant</label>
                    <select name="matricule" class="form-control @error('matricule') is-invalid @enderror" id="matricule">
                        <option value="{{ $paiement->etudiant->matricule }}">{{ $paiement->etudiant->nom }}<option>
                      @foreach ($etudiants as $etudiant)

                        @if ($etudiant->maricule != $paiement->etudiant->matricule)

                            <option value="{{ $etudiant->matricule }}">{{ $etudiant->nom }}</option>

                        @endif
                      @endforeach
                    </select>
                    @error('matricule')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="modepaiement">Select. Mode paiement</label>
                    <select name="modepaiement" class="form-control @error('modepaiement') is-invalid @enderror" id="modepaiement">
                        <option value="{{ $paiement->modePaiement->idmodepaiement }}">{{ $paiement->modePaiement->libellemodepaiement }}<option>
                        @foreach ($modePaiements as $modepaiement)
                            @if ($modepaiement->libellemodepaiement != $paiement->modePaiement->libellemodepaiement)

                            <option value="{{ $modepaiement->idmodepaiement }}">{{ $modepaiement->libellemodepaiement }}</option>
                            @endif
                      @endforeach
                    </select>
                    @error('modepaiement')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="mois">Select. Le mois</label>
                    <select name="mois" class="form-control @error('mois') is-invalid @enderror" id="mois">
                      <option value="{{ $paiement->mois }}">{{ $paiement->mois }}<option>
                      @foreach ($mois as $moi)

                        @if ($paiement->mois != $moi)

                            <option value="{{ $moi }}">{{ $moi }}</option>

                        @endif
                      @endforeach
                    </select>
                    @error('mois')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="montant">Montant paiement</label>
                  <input name="montant" value="{{ $paiement->montant }}" type="number" class="form-control @error('montant') is-invalid @enderror" id="montant"/>
                    @error('montant')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="datepaiement">Date de paiement</label>
                  <input name="datepaiement" type="date" value="{{ $paiement->datepaiement }}" class="form-control @error('datepaiement') is-invalid @enderror" id="datepaiement"/>
                    @error('datepaiement')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="observation">Observation</label>
                  <textarea name="observation" class="form-control @error('observation') is-invalid @enderror" id="observation"> {{ $paiement->observation }} </textarea>
                    @error('observation')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-secondary">modifier le paiement</button>
            </form>
          </div>
        </div>

    <div>
@endsection
