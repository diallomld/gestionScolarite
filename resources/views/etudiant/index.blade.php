@extends('master')

@section('content')
    <div class="row col-lg-12" style="justify-content: center">
        <div class="card align-content-lg-center shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des Etudiants</h6>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length">
                                <label>Afficher <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter">
                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                            </div>
                        </div>
                    </div>
                    <div class="float-left">
                        <a href="{{ route('etudiant.create') }}" class="btn btn-success btn-lg">Ajouter</a>
                    </div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>id</th>
                                <th>Nationnalite</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Adresse</th>
                                <th>Telephone portable</th>
                                <th>Tel domicile</th>
                                <th>Telephone Tuteur</th>
                                <th>Nom Tuteur</th>
                                <th>Date Naissance</th>
                                <th>Lieu de Naissance</th>
                                <th>Genre</th>
                                <th>Sit. Matrimonial</th>
                                <th>Disponibilite</th>
                                <th>Heure debut</th>
                                <th>Heure Fin</th>
                                <th>Site web</th>
                                <th>Reseau social</th>
                                <th>Email</th>
                                <th>Societe</th>
                                <th>Profession</th>
                                <th>Fonction</th>
                                <th>Adesse Societe</th>
                                <th>Tel bureau</th>
                                <th>Dernier Etablissement</th>
                                <th>Niveau Etude</th>
                                <th>Diplome/titre</th>
                                <th>Annee Frequentation</th>
                                <th>Maladie</th>
                                <th>Frais Inscription</th>
                                <th>Observation</th>
                                <th>Modifier</th>
                                <th>Suprimer</th>
                            </tr>
                        </thead>
                        <tfoot class="thead-light">
                            <tr>
                                <th>id</th>
                                <th>Nationnalite</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Adresse</th>
                                <th>Telephone portable</th>
                                <th>Tel domicile</th>
                                <th>Telephone Tuteur</th>
                                <th>Nom Tuteur</th>
                                <th>Date Naissance</th>
                                <th>Lieu de Naissance</th>
                                <th>Genre</th>
                                <th>Sit. Matrimonial</th>
                                <th>Disponibilite</th>
                                <th>Heure debut</th>
                                <th>Heure Fin</th>
                                <th>Site web</th>
                                <th>Reseau social</th>
                                <th>Email</th>
                                <th>Societe</th>
                                <th>Profession</th>
                                <th>Fonction</th>
                                <th>Adesse Societe</th>
                                <th>Tel bureau</th>
                                <th>Dernier Etablissement</th>
                                <th>Niveau Etude</th>
                                <th>Diplome/titre</th>
                                <th>Annee Frequentation</th>
                                <th>Maladie</th>
                                <th>Frais Inscription</th>
                                <th>Observation</th>
                                <th>Modifier</th>
                                <th>Suprimer</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($etudiants as $etudiant)

                            <tr>
                                <td> {{ $etudiant->matricule? $etudiant->matricule:"non definie" }} </td>
                                <td>{{ $etudiant->nationnalite->nom ? $etudiant->nationnalite->nom:"non definie"}}</td>
                                <td>{{ $etudiant->nom ? $etudiant->nom:"non definie" }}</td>
                                <td>{{ $etudiant->prenom ? $etudiant->prenom:"non definie" }}</td>
                                <td>{{ $etudiant->adresse ? $etudiant->adresse:"non definie" }}</td>
                                <td>{{ $etudiant->telephone ? $etudiant->telephone:"non definie" }}</td>
                                <td>{{ $etudiant->teldomicile ? $etudiant->teldomicile:"non definie" }}</td>
                                <td>{{ $etudiant->teltuteur ? $etudiant->teltuteur:"non definie"}}</td>
                                <td>{{ $etudiant->nomtuteur ? $etudiant->nomtuteur:"non definie"}}</td>
                                <td>{{ $etudiant->datenaissance ? $etudiant->datenaissance:"non definie" }}</td>
                                <td>{{ $etudiant->lieu ? $etudiant->lieu:"non definie"}}</td>
                                <td>{{ $etudiant->genre ? $etudiant->genre:"non definie" }}</td>
                                <td>{{ $etudiant->matrimonial? $etudiant->matrimonial:"non definie" }}</td>
                                <td>{{ $etudiant->disponibilite ? $etudiant->disponibilite:"non definie" }}</td>
                                <td>{{ $etudiant->heuredebut ? $etudiant->heuredebut:"non definie" }}</td>
                                <td>{{ $etudiant->heurefin ? $etudiant->heurefin:"non definie"}}</td>
                                <td>{{ $etudiant->siteweb ? $etudiant->siteweb:"non definie"}}</td>
                                <td>{{ $etudiant->reseausocial ? $etudiant->reseausocial:"non definie"}}</td>
                                <td>{{ $etudiant->email ? $etudiant->email:"non definie"}}</td>
                                <td>{{ $etudiant->societe ? $etudiant->societe:"non definie"}}</td>
                                <td>{{ $etudiant->profession ? $etudiant->profession:"non definie"}}</td>
                                <td>{{ $etudiant->fonction ? $etudiant->fonction:"non definie"}}</td>
                                <td>{{ $etudiant->adressesociete ? $etudiant->adressesociete:"non definie"}}</td>
                                <td>{{ $etudiant->telbureau ? $etudiant->telbureau:"non definie"}}</td>
                                <td>{{ $etudiant->dernieretablissement ? $etudiant->dernieretablissement:"non definie"}}</td>
                                <td>{{ $etudiant->niveauetude ? $etudiant->niveauetude:"non definie" }}</td>
                                <td>{{ $etudiant->diplome_titre ? $etudiant->diplome_titre:"non definie"}}</td>
                                <td>{{ $etudiant->annee_frequantation ? $etudiant->annee_frequantation:"non definie"}}</td>
                                <td>{{ $etudiant->maladie ? $etudiant->maladie:"non definie"}}</td>
                                <td>{{ $etudiant->fraispresinscription ? $etudiant->fraispresinscription:"non definie"}}</td>
                                <td>{{ $etudiant->observations ? $etudiant->observations:"non definie"}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('etudiant.edit', $etudiant->matricule ) }}">Modifier</a>
                                </td>
                                <td>
                                    <form action="{{ route('etudiant.destroy', $etudiant->matricule ) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer')" type="submit" class="btn-danger">Supprimer</button>

                                    </form>
                                    <div>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <div style="margin-left: 40%">{{ $etudiants->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
