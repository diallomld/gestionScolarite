@extends('master')

@section('content')
    <div class="row col-lg-12">
        <div class="card align-content-lg-center shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des Cours</h6>
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
                    <a href="{{ route('cours.create') }}" class="btn btn-success">Ajouter</a>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Classe</th>
                                <th>Matiere(EC)</th>
                                <th>Salle</th>
                                <th>Nom du cours</th>
                                <th>Desc du cours</th>
                                <th>Heure Debut</th>
                                <th>Heure Fin</th>
                                <th>Duree</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cours as $cour)

                            <tr>
                                <td> {{ $cour->idcours }} </td>
                                <td> {{ $cour->classe->nomclasse }} </td>
                                <td> {{ $cour->ec->nomec }} </td>
                                <td> {{ $cour->salle->nomsalle }} </td>
                                <td>{{ $cour->nomcours }}</td>
                                <td>{{ $cour->desccours }}</td>
                                <td>{{ $cour->duree }}</td>
                                <td>{{ $cour->heuredebut }}</td>
                                <td>{{ $cour->heurefin }}</td>
                                <td class="btn btn-primary"><a class="btn-primary" href="{{ route('cours.edit', $cour->idcours ) }}">Modifier</a></td>

                                <form action="{{ route('cours.destroy', $cour->idcours ) }}" method="post">
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
