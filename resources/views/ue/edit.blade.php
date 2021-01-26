@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'une Unite d'enseignement</div>
          <div class="card-body">
            <form method="POST" action="{{ route('ue.update', $ue->iduea)}}">
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
                    <label for="filiere">Selectionner la filiere</label>
                    <select name="filiere" class="form-control @error('filiere') is-invalid @enderror" id="filiere">
                        <option value="{{ $ue->filiere->idfiliere }}">{{ $ue->filiere->nomfiliere}}</option>
                        @foreach ($filieres as $filiere)
                          @if($filiere->nomfiliere != $ue->filiere->nomfiliere )
                            <option value="{{ $filiere->idfiliere }}">{{ $filiere->nomfiliere }}</option>
                          @endif
                      @endforeach
                    </select>
                    @error('filiere')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="descuea">Description UEA</label>
                  <textarea name="descuea" value="{{ $ue->descuea }}" class="form-control @error('descuea') is-invalid @enderror" id="descuea">{{ $ue->descuea}}</textarea>
                    @error('descuea')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="sigleue">Sigle UEA</label>
                  <input type="text" name="sigleue" value="{{ $ue->sigleue }}" class="form-control @error('sigleue') is-invalid @enderror" id="sigleue" placeholder="Entrer un sigle..."/>
                    @error('sigleue')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="typeue">Type UEA</label>
                  <input type="text" name="typeue" value="{{ $ue->typeue }}" class="form-control @error('typeue') is-invalid @enderror" id="typeue" placeholder="Entrer un sigle..."/>
                    @error('typeue')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Modifier l'UE</button>
            </form>
          </div>
        </div>

    <div>
@endsection
