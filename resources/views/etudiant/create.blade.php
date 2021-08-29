@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout des etudiants </div>
          <div class="card-body">
            <form method="POST" action="{{ route('etudiant.store')}}">
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
                  <label for="nometudiant">Nom</label>
                  <input type="text" name="nom" class="form-control @error('nometudiant') is-invalid @enderror" id="nometudiant" placeholder="Entrer votre nom">
                    @error('nometudiant')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="prenometudiant">prenom</label>
                  <input type="text" name="prenom" class="form-control @error('prenometudiant') is-invalid @enderror" id="prenometudiant" placeholder="Entrer votre prenom">
                    @error('prenometudiant')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idanneescolaire">Nationnalite</label>
                    <select name="idnationnalite" class="form-control @error('idanneescolaire') is-invalid @enderror" id="idanneescolaire">
                      @foreach ($nationnalites as $nationnalite)
                          <option value="{{ $nationnalite->idnationnalite }}">{{ $nationnalite->nom }}</option>
                      @endforeach
                    </select>
                    @error('idanneescolaire')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" class="form-control @error('adresse') is-invalid @enderror" id="adresse" placeholder="Entrer l'adresse">
                    @error('adresse')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone Portable</label>
                    <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Entrer le numero de telephone">
                    @error('telephone')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="teldomicile">tel. domicile</label>
                    <input type="text" name="teldomicile" class="form-control @error('teldomicile') is-invalid @enderror" id="teldomicile">
                    @error('teldomicile')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="siteweb">Site web</label>
                    <input type="text" name="siteweb" class="form-control @error('siteweb') is-invalid @enderror" id="siteweb">
                    @error('siteweb')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="reseausocial">Reseau Social</label>
                    <input type="text" name="reseausocial" class="form-control @error('reseausocial') is-invalid @enderror" id="reseausocial">
                    @error('reseausocial')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
                    @error('email')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="profession">Profession</label>
                    <input type="text" name="profession" class="form-control @error('profession') is-invalid @enderror" id="profession">
                    @error('profession')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="societe">Societe</label>
                    <input type="text" name="societe" class="form-control @error('societe') is-invalid @enderror" id="societe">
                    @error('societe')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fonction">Fonction</label>
                    <input type="text" name="fonction" class="form-control @error('fonction') is-invalid @enderror" id="fonction">
                    @error('fonction')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="adressesociete">Adresse societe</label>
                    <input type="text" name="adressesociete" class="form-control @error('adressesociete') is-invalid @enderror" id="adressesociete">
                    @error('adressesociete')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telbureau">Tel Bureau</label>
                    <input type="text" name="telbureau" class="form-control @error('telbureau') is-invalid @enderror" id="telbureau">
                    @error('telbureau')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dernieretablissement">Dernier Etablissement</label>
                    <input type="text" name="dernieretablissement" class="form-control @error('dernieretablissement') is-invalid @enderror" id="dernieretablissement">
                    @error('dernieretablissement')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="niveauetude">Niveau d'Etude</label>
                    <input type="text" name="niveauetude" class="form-control @error('niveauetude') is-invalid @enderror" id="niveauetude">
                    @error('niveauetude')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="diplometitre">Diplometitre/Tire</label>
                    <input type="text" name="diplometitre" class="form-control @error('diplometitre') is-invalid @enderror" id="diplometitre">
                    @error('diplometitre')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="anneefrequentation">Année Frequentation</label>
                    <input type="text" name="anneefrequentation" class="form-control @error('anneefrequentation') is-invalid @enderror" id="anneefrequentation">
                    @error('anneefrequentation')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="maladie">Maladie</label>
                    <input type="text" name="maladie" class="form-control @error('maladie') is-invalid @enderror" id="maladie">
                    @error('maladie')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone Tuteur</label>
                    <input type="text" name="teltuteur" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Entrer le numero du tuteur">
                    @error('telephone')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nomtuteur">Nom Tuteur</label>
                    <input type="text" name="nomtuteur" class="form-control @error('nomtuteur') is-invalid @enderror" id="nomtuteur" placeholder="Entrer le nom du tuteur">
                    @error('nomtuteur')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="datenaissance">Date Naissance</label>
                    <input type="date" name="datenaissance" class="form-control @error('datenaissance') is-invalid @enderror" id="datenaissance" placeholder="Entrer la date de naissance">
                    @error('datenaissance')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lieu">Lieu de Naissance</label>
                    <input type="text" name="lieu" class="form-control @error('lieu') is-invalid @enderror" id="lieu" placeholder="Entrer le lieu de naissance">
                    @error('lieu')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <select name="genre" class="form-control @error('genre') is-invalid @enderror">
                        <option value="">Genre..</option>
                        <option value="masculin">Masculin</option>
                        <option value="feminin">Feminin</option>
                    <select>
                    @error('genre')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <select name="matrimonial" class="form-control @error('matrimonial') is-invalid @enderror">
                        <option value="">Selectionner Sit. Matrimonial</option>
                        <option value="marie">Marié</option>
                        <option value="divorce">Divorcé</option>
                        <option value="celibataire">Celibataire</option>
                        <option value="veuve">veuf(ve)</option>
                    <select>
                    @error('matrimonial')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telephone">Disponibilite</label>
                    <input type="text" name="disponibilite" class="form-control @error('disponibilite') is-invalid @enderror" id="disponibilite" placeholder="Disponibilite">
                    @error('disponibilite')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="heuredebut">Heure debut</label>
                    <input type="text" name="heuredebut" class="form-control @error('heuredebut') is-invalid @enderror" id="heuredebut">
                    @error('heuredebut')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="heurefin">Heure Fin</label>
                    <input type="text" name="heurefin" class="form-control @error('heurefin') is-invalid @enderror" id="heurefin">
                    @error('heurefin')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fraispresinscription">Frais Presinscription</label>
                    <input type="text" name="fraispresinscription" class="form-control @error('fraispresinscription') is-invalid @enderror" id="fraispresinscription">
                    @error('fraispresinscription')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="observations">Observations</label>
                    <textarea type="text" name="observations" class="form-control @error('observations') is-invalid @enderror" id="observations" rows="5">observations...</textarea>
                    @error('observations')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ajouter l'etudiant</button>
            </form>
          </div>
        </div>

    <div>
@endsection
