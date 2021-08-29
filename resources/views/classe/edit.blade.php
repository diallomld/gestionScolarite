@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Modification d'une</div>
          <div class="card-body">
            <form method="POST" action="{{ route('classe.update',$classe->numero)}}">
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
                @method('PUT')
                <div class="form-group">
                    <label for="idfiliere">Selectionner la filiere/specialite</label>
                    <select name="idfiliere" class="form-control @error('idfiliere') is-invalid @enderror" id="idfiliere">
                        <option value="{{ $classe->filiere->idfiliere }}">{{ $classe->filiere->nomfiliere}}</option>
                        @foreach ($specialites as $specialite)
                          @if($specialite->nomfiliere != $classe->filiere->nomfiliere )
                            <option value="{{ $specialite->idfiliere }}">{{ $specialite->nomfiliere }}</option>
                          @endif
                      @endforeach
                    </select>
                    @error('idfiliere')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="nomclasse">nom classe</label>
                  <input name="nomclasse" value="{{ $classe->nomclasse }}" type="text" class="form-control @error('nomclasse') is-invalid @enderror" id="nomclasse" placeholder="entrer le nom de l'classe..."/>
                    @error('nomclasse')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="fraisscolarite">Frais de Scolarite</label>
                  <input name="fraisscolarite" value="{{ $classe->fraisscolarite }}" type="text" class="form-control @error('fraisscolarite') is-invalid @enderror" id="fraisscolarite" placeholder="entrer le nom de l'classe..."/>
                    @error('fraisscolarite')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Modifier la classe</button>
            </form>
          </div>
        </div>

    <div>
@endsection
