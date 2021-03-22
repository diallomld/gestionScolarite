@extends('master')

@section('content')
    <div class="row col-lg-12">
        <div class="card align-content-lg-center shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des Evaluation</h6>
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
                    <a href="{{ route('evaluation.create') }}" class="btn btn-success">Ajouter</a>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Ec</th>
                                <th>Nom Classe</th>
                                <th>Semestre</th>
                                <th>Date Evaluation </th>
                                <th>Type Evaluation</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Ec</th>
                                <th>Nom Class</th>
                                <th>Semestre</th>
                                <th>Date Evaluation </th>
                                <th>Type Evaluation</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($evaluations as $evaluation)

                            <tr>
                                <th> {{ $evaluation->idevaluation }} </th>
                                <th>{{ $evaluation->ec->nomec }}</th>
                                <th>{{ $evaluation->classe->nomclasse }}</th>
                                <th>{{ $evaluation->semestre->libellesemestre }}</th>
                                <th>{{ $evaluation->dateevaluation }}</th>
                                <th>{{ $evaluation->typeevaluation }}</th>
                                <th class="btn btn-primary"><a class="btn-primary" href="{{ route('evaluation.edit', $evaluation->idevaluation ) }}">Modifier</a></th>

                                <form action="{{ route('evaluation.destroy', $evaluation->idevaluation ) }}" method="post">
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
