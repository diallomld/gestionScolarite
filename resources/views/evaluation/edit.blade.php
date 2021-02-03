@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification de l'evaluation</div>
          <div class="card-body">
            <form method="post" action="{{ route('evaluation.update', $evaluation->idevaluation)}}">
                @csrf
                @method('PUT')
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  }} --}}

                
                <div class="form-group">
                    <label for="dateevaluation">Date valuation</label>
                    <input name="dateevaluation" value="{{ $evaluation->dateevaluation }}" class="form-control @error('dateevaluation') is-invalid @enderror" id="libelleevaluation">
                    @error('nom')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="typeevaluation">Type evaluation</label>
                    <input name="typeevaluation" value="{{ $evaluation->typeevaluation }}" class="form-control @error('typeevaluation') is-invalid @enderror" id="libelleevaluation">
                    @error('typeevaluation')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="anneescolaire">Ec</label>
  
                    <select name="idec" class="form-control @error('idec') is-invalid @enderror" id="idec">
                      <option value="{{ $evaluation->ec->idec }}">{{ $evaluation->ec->nomec }}</option>
                      @foreach ($ecs as $ec)
                      @if($evaluation->ec->nomec != $ec->nomec )
                      <option value="{{ $ec->idec }}">{{ $ec->nomec }}</option>
                    @endif
                      @endforeach
                    </select>
                    @error('idec')
                          <div class="alert alert-danger"> {{$message}} </div>
                      @enderror
                  </div>
                    <select name="numero" class="form-control @error('numero') is-invalid @enderror" id="numero">
                      <option value="{{ $evaluation->classe->numero }}">{{ $evaluation->classe->nomclasse }}</option>
                      @foreach ($classes as $classe)
                      @if($evaluation->classe->nomclasse != $ec->nomclasse )
                      <option value="{{ $classe->numero }}">{{ $classe->nomclasse }}</option>
                    @endif
                      @endforeach
                    </select>
                    @error('classe')
                          <div class="alert alert-danger"> {{$message}} </div>
                      @enderror
                  </div>
                <button type="submit" class="btn btn-primary">Modifier l'evaluation</button>
            </form>
          </div>
        </div>
    <div>
@endsection
