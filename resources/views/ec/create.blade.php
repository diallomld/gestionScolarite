@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'un element constitif(EC)</div>
          <div class="card-body">
            <form method="POST" action="{{ route('ec.store')}}">
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
                    <label for="iduea">Selectionner l'UE</label>
                    <select name="iduea" class="form-control @error('iduea') is-invalid @enderror" id="iduea">
                      @foreach ($ues as $ue)
                          <option value="{{ $ue->iduea }}">{{ $ue->sigleue }}</option>
                      @endforeach
                    </select>
                    @error('iduea')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="nomec">nom EC</label>
                  <input name="nomec" type="text" class="form-control @error('nomec') is-invalid @enderror" id="nomec" placeholder="entrer le nom de l'EC..."/>
                    @error('nomec')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="cm">Cours magistral (CM)</label>
                  <input type="number" name="cm" class="form-control @error('cm') is-invalid @enderror" id="cm" placeholder="Entrer cm..">
                    @error('cm')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="sigleec">Sigle EC</label>
                  <input type="text" name="sigleec" class="form-control @error('sigleec') is-invalid @enderror" id="sigleec" placeholder="Entrer la specialite">
                    @error('sigleec')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="td">TD</label>
                  <input type="number" name="td" class="form-control @error('td') is-invalid @enderror" id="td" placeholder="Entrer la specialite">
                    @error('td')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="tpe">TPE</label>
                  <input type="number" name="tpe" class="form-control @error('tpe') is-invalid @enderror" id="tpe" placeholder="Entrer la specialite">
                    @error('tpe')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter un Element constitif (Ec)</button>
            </form>
          </div>
        </div>

    <div>
@endsection
