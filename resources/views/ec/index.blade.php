@extends('master')

@section('content')
    <div class="row col-lg-12">
        <div class="card align-content-lg-center shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des Elements constitifs (EC)</h6>
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
                    <a href="{{ route('ec.create') }}" class="btn btn-success">Ajouter</a>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>EC</th>
                                <th>CM</th>
                                <th>Nom EC</th>
                                <th>Sigle EC</th>
                                <th>TD</th>
                                <th>TPE</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Filiere</th>
                                <th>Desc Uea</th>
                                <th>Type Uea</th>
                                <th>Sigle Uea</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($ecs as $ec)

                            <tr>
                                <td> {{ $ec->idec }} </td>
                                <td> {{ $ec->ue->sigleue }} </td>
                                <td>{{ $ec->cm }}</td>
                                <td>{{ $ec->nomec }}</td>
                                <td>{{ $ec->td }}</td>
                                <td>{{ $ec->tpe }}</td>
                                <td>{{ $ec->sigleec }}</td>
                                <td class="btn btn-primary"><a class="btn-primary" href="{{ route('ec.edit', $ec->idec ) }}">Modifier</a></td>

                                <form action="{{ route('ec.destroy', $ec->idec ) }}" method="post">
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
