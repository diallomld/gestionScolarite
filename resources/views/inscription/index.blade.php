@extends('master')

@section('content')
    <div class="row col-lg-10" style="justify-content: center; margin-left: 10%">
        <div class="card align-content-lg-center shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des Inscriptions</h6>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length">
                                <label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter">
                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('inscription.create') }}" class="btn btn-success">Ajouter</a>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>Numero</th>
                                <th>Matricule etudiant</th>
                                <th>Annee Scolaire</th>
                                <th>classe</th>
                                <th>Date d'inscription</th>
                                <th>Frais de scolarite</th>
                                <th>Frais d'inscription</th>
                                <th>Frais d'examen</th>
                                <th>Frais uniforme</th>
                                <th>Frais de soutenance</th>
                                <th>Frais dossier</th>
                                <th>Frais assurance</th>
                                <th>Frais amical</th>
                                <th>Frais bibliotheque</th>
                                <th>Frais stage</th>
                                <th>Frais cantine</th>
                                <th>Bourse</th>
                                <th>Note</th>
                                <th>Partenaire</th>
                                <th>Modifier</th>
                                <th>Suprimer</th>
                            </tr>
                        </thead>
                        <tfoot class="thead-light">
                            <tr>
                                <th>Numero</th>
                                <th>Matricule etudiant</th>
                                <th>Annee Scolaire</th>
                                <th>classe</th>
                                <th>Date d'inscription</th>
                                <th>Frais de scolarite</th>
                                <th>Frais d'inscription</th>
                                <th>Frais d'examen</th>
                                <th>Frais uniforme</th>
                                <th>Frais de soutenance</th>
                                <th>Frais dossier</th>
                                <th>Frais assurance</th>
                                <th>Frais amical</th>
                                <th>Frais bibliotheque</th>
                                <th>Frais stage</th>
                                <th>Frais cantine</th>
                                <th>Bourse</th>
                                <th>Note</th>
                                <th>Partenaire</th>
                                <th>Modifier</th>
                                <th>Suprimer</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($inscriptions as $inscription)

                            <tr>
                                <td>{{ $inscription->numinscription }} </td>
                                <td>{{ $inscription->etudiant->nom }} </td>
                                <td>{{ $inscription->annee->anneescolaire }} </td>
                                <td>{{ $inscription->classe->nomclasse }} </td>
                                <td>{{ $inscription->dateinscription }}</td>
                                <td>{{ $inscription->fraisscolarite }}</td>
                                <td>{{ $inscription->fraisinscription }}</td>
                                <td>{{ $inscription->fraisexamen }}</td>
                                <td>{{ $inscription->fraisuniforme }}</td>
                                <td>{{ $inscription->fraissoutenance }}</td>
                                <td>{{ $inscription->fraisdossier }}</td>
                                <td>{{ $inscription->fraisassurance }}</td>
                                <td>{{ $inscription->fraisamical }}</td>
                                <td>{{ $inscription->fraisbibliotheque }}</td>
                                <td>{{ $inscription->fraisstage }}</td>
                                <td>{{ $inscription->fraiscantine }}</td>
                                <td>{{ $inscription->bourse ? $inscription->bourse:"non défini"}}</td>
                                <td>{{ $inscription->note ? $inscription->note:"non défini" }}</td>
                                <td>{{ !empty($inscription->partenaire->nom) ? $inscription->partenaire->nom:"non defini" }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('inscription.edit', $inscription->numinscription ) }}">Modifier</a>
                                </td>
                                <td>
                                    <form action="{{ route('inscription.destroy', $inscription->numinscription ) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer')" type="submit" class="btn-danger">Supprimer</button>

                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
