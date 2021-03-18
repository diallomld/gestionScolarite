@extends('master')

@section('content')
    <div class="row col-lg-12">
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
                                <label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter">
                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('etudiant.create') }}" class="btn btn-success">Ajouter</a>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nationnalite</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Adresse</th>
                                <th>Telephone</th>
                                <th>Telephone Tuteur</th>
                                <th>Nom Tuteur</th>
                                <th>Date Naissance</th>
                                <th>Lieu de Naissance</th>
                                <th>Genre</th>
                                <th>Disponibilite</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Nationnalite</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Adresse</th>
                                <th>Telephone</th>
                                <th>Telephone Tuteur</th>
                                <th>Nom Tuteur</th>
                                <th>Date Naissance</th>
                                <th>Lieu de Naissance</th>
                                <th>Genre</th>
                                <th>Disponibilite</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($etudiants as $etudiant)

                            <tr>
                                <th> {{ $etudiant->matricule }} </th>
                                <th>{{ $etudiant->nationnalite->nom }}</th>
                                <th>{{ $etudiant->nom }}</th>
                                <th>{{ $etudiant->prenom }}</th>
                                <th>{{ $etudiant->adresse }}</th>
                                <th>{{ $etudiant->telephone }}</th>
                                <th>{{ $etudiant->teltuteur }}</th>
                                <th>{{ $etudiant->nomtuteur }}</th>
                                <th>{{ $etudiant->datenaissance }}</th>
                                <th>{{ $etudiant->lieu }}</th>
                                <th>{{ $etudiant->genre }}</th>
                                <th>{{ $etudiant->disponibilite }}</th>
                                <th class="btn btn-primary"><a class="btn-primary" href="{{ route('etudiant.edit', $etudiant->matricule ) }}">Modifier</a></th>

                                <form action="{{ route('etudiant.destroy', $etudiant->matricule ) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <th class="btn btn-danger"> <button onclick="return confirm('Voulez-vous vraiment supprimer')" type="submit" class="btn-danger">Supprimer</button></th>

                                </form>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
