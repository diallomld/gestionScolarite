@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'une Specialite</div>
          <div class="card-body">
            <form method="POST" action="{{ route('specialite.update', $specialite->idfiliere)}}">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  }} --}}
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="nomfiliere">Nom specialite</label>
                  <input type="text" name="nomfiliere" value="{{ $specialite->nomfiliere }}" class="form-control @error('nomfiliere') is-invalid @enderror" id="nomfiliere" placeholder="Entrer la specialite">
                    @error('nomfiliere')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="mention">Selectionner la mention</label>
                    <select name="mention" class="form-control @error('mention') is-invalid @enderror" id="mention">
                        <option value="{{ $specialite->mention->idmention }}">{{ $specialite->mention->nommention}}</option>
                        @foreach ($mentions as $mention)
                          @if($mention->nommention != $specialite->mention->nommention )
                            <option value="{{ $mention->idmention }}">{{ $mention->nommention }}</option>
                          @endif
                      @endforeach
                    </select>
                    @error('mention')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Modifier la specialite</button>
            </form>
          </div>
        </div>

    <div>
@endsection
