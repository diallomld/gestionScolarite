@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification d'une inscription</div>
          <div class="card-body">
            <form method="POST" action="{{ route('inscription.update', $inscription)}}">
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
                        <option value="{{$inscription->etudiant->matricule}}">{{$inscription->etudiant->nom}}</option>
                    </select>
                    @error('matricule')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="numero">Select. Classe</label>
                    <select name="numero" value="{{ old('numeo') }}" class="form-control @error('numero') is-invalid @enderror" id="numero">

                        <option value="{{$inscription->classe->numero}}"> {{ $inscription->classe->nomclasse }}</option>

                        @foreach ($classes as $classe)

                            @if ($classe->numero != $inscription->classe->numero )

                                <option value="{{ $classe->numero }}">{{ $classe->nomclasse }}</option>

                            @endif
                        @endforeach

                    </select>
                    @error('numero')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idannescolaire">Select. Annee scolaire</label>
                    <select name="idannescolaire" value="{{ old('numeo') }}" class="form-control @error('idannescolaire') is-invalid @enderror" id="idannescolaire">


                        <option value="{{ $inscription->annee->idannescolaire }}">{{$inscription->annee->anneescolaire}}</option>

                        @foreach ($annees as $annee)

                            @if ($annee->idannescolaire != $inscription->annee->idannescolaire)

                             <option value="{{ $annee->idannescolaire }}">{{ $annee->anneescolaire }}</option>

                            @endif
                      @endforeach
                    </select>
                    @error('idannescolaire')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bourse">Bourse</label>
                    <select name="bourse" class="form-control @error('bourse') is-invalid @enderror" id="bourse">
                        <option value="bourse 1">bourse 1</option>
                        <option value="bourse 2">bourse 2</option>
                        <option value="bourse 3">bourse 3</option>
                        <option value="bourse 4">bourse 4</option>
                    </select>
                    @error('bourse')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="partenaire">Select. Partenaire</label>
                    <select name="partenaire" value="{{ old('partenaire') }}" class="form-control @error('partenaire') is-invalid @enderror" id="partenaire">
                      @foreach ($partenaires as $partenaire)
                          <option value="{{ $partenaire->id }}">{{ $partenaire->nom }}</option>
                      @endforeach
                    </select>
                    @error('partenaire')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="note">Note</label>
                    <input name="note" value="{{ $inscription->note }}" class="form-control @error('note') is-invalid @enderror" id="note">
                    @error('note')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fraisscolarite">Frais de scolarite</label>
                    <input name="fraisscolarite" value="{{ $inscription->fraisscolarite }}" class="form-control @error('fraisscolarite') is-invalid @enderror" id="fraisscolarite">
                    @error('fraisscolarite')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fraisinscription">Frais d'inscription</label>
                    <input name="fraisinscription" value="{{ $inscription->fraisinscription }}" class="form-control @error('fraisinscription') is-invalid @enderror" id="fraisinscription">
                    @error('fraisinscription')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fraisexamen">Frais d'examen</label>
                    <input name="fraisexamen" value="{{ $inscription->fraisexamen }}" class="form-control @error('fraisexamen') is-invalid @enderror" id="fraisexamen">
                    @error('fraisexamen')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fraisuniforme">Frais uniforme</label>
                    <input name="fraisuniforme" value="{{ $inscription->fraisuniforme }}" class="form-control @error('fraisuniforme') is-invalid @enderror" id="fraisuniforme">
                    @error('fraisuniforme')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fraissoutenance">Frais soutenance</label>
                    <input name="fraissoutenance" value="{{ $inscription->fraissoutenance }}" class="form-control @error('fraissoutenance') is-invalid @enderror" id="fraissoutenance">
                    @error('fraissoutenance')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fraisdossier">Frais de dossier</label>
                    <input name="fraisdossier" value="{{ $inscription->fraisdossier }}" class="form-control @error('fraisdossier') is-invalid @enderror" id="fraisdossier">
                    @error('fraisdossier')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fraisassurance">Frais assurance</label>
                    <input name="fraisassurance" value="{{ $inscription->fraisassurance }}" class="form-control @error('fraisassurance') is-invalid @enderror" id="fraisassurance">
                    @error('fraisassurance')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fraisamical">Frais amical</label>
                    <input name="fraisamical" value="{{ $inscription->fraisamical }}" class="form-control @error('fraisamical') is-invalid @enderror" id="fraisamical">
                    @error('fraisamical')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fraisbibliotheque">Frais bibliothéque</label>
                    <input name="fraisbibliotheque" value="{{ $inscription->fraisbibliotheque }}" class="form-control @error('fraisbibliotheque') is-invalid @enderror" id="fraisbibliotheque">
                    @error('fraisbibliotheque')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fraisstage">Frais de stage</label>
                    <input name="fraisstage" value="{{$inscription->fraisstage }}" class="form-control @error('fraisstage') is-invalid @enderror" id="fraisstage">
                    @error('fraisstage')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fraiscantine">Frais cantine</label>
                    <input name="fraiscantine" value="{{ $inscription->fraiscantine }}" class="form-control @error('fraiscantine') is-invalid @enderror" id="fraiscantine">
                    @error('fraiscantine')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Modifié une inscription</button>
            </form>
          </div>
        </div>

    <div>
@endsection
