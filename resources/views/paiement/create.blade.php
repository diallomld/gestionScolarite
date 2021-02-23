@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'un paiement</div>
          <div class="card-body">
            <form method="POST" action="{{ route('paiement.store')}}">
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
                    <label for="matricule">Select. Matricule etudiant</label>
                    <select name="matricule" class="form-control @error('matricule') is-invalid @enderror" id="matricule">
                      @foreach ($etudiants as $etudiant)
                          <option value="{{ $etudiant->matricule }}">{{ $etudiant->nom }}</option>
                      @endforeach
                    </select>
                    @error('matricule')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="modepaiement">Select. Mode paiement</label>
                    <select name="modepaiement" value="{{ old('numeo') }}" class="form-control @error('modepaiement') is-invalid @enderror" id="modepaiement">
                      @foreach ($modePaiements as $modepaiement)
                          <option value="{{ $modepaiement->idmodepaiement }}">{{ $modepaiement->libellemodepaiement }}</option>
                      @endforeach
                    </select>
                    @error('modepaiement')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="mois">Select. Le mois</label>
                    <select id="select2" multiple name="mois[]" class="form-control @error('mois') is-invalid @enderror" id="mois">
                      @foreach ($mois as $moi)
                          <option value="{{ $moi }}">{{ $moi }}</option>
                      @endforeach
                    </select>
                    @error('mois')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="montant">Montant paiement</label>
                  <input name="montant" type="number" class="form-control @error('montant') is-invalid @enderror" id="montant"/>
                    @error('montant')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="datepaiement">Date de paiement</label>
                  <input name="datepaiement" type="date" class="form-control @error('datepaiement') is-invalid @enderror" id="datepaiement"/>
                    @error('datepaiement')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="observation">Observation</label>
                  <textarea name="observation" class="form-control @error('observation') is-invalid @enderror" id="observation">Observation...</textarea>
                    @error('observation')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter un paiement</button>
            </form>
          </div>
        </div>

    <div>
@endsection

<script type="text/javascript">

</script>
