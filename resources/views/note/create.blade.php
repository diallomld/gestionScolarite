@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout des notes</div>
          <div class="card-body">
            <form method="POST" action="{{ route('note.store')}}">
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
                  <label for="note">Note</label>
                  <input type="number" name="note" class="form-control @error('note') is-invalid @enderror" id="note" placeholder="Entrer la note">
                    @error('note')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idec">Selectionner l'ec</label>
                    <select name="idec" class="form-control @error('idec') is-invalid @enderror" id="idec">
                      @foreach ($ecs as $ec)
                          <option value="{{ $ec->idec }}">{{ $ec->nomec }}</option>
                      @endforeach
                    </select>
                    @error('idec')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idevaluation">Selectionner le type d'evaluation</label>
                    <select name="idevaluation" class="form-control @error('idevaluation') is-invalid @enderror" id="idevaluation">
                      @foreach ($evaluations as $eva)
                          <option value="{{ $eva->idevaluation }}">{{ $eva->typeevaluation }}</option>
                      @endforeach
                    </select>
                    @error('idevaluation')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="matricule">Selectionner l'etudiant</label>
                    <select name="matricule" class="form-control @error('matricule') is-invalid @enderror" id="matricule">
                      @foreach ($etudiants as $et)
                          <option value="{{ $et->matricule }}">{{ $et->nom }}</option>
                      @endforeach
                    </select>
                    @error('matricule')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter la note</button>
            </form>
          </div>
        </div>

    <div>
@endsection
