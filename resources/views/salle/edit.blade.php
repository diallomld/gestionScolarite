@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification d'une salle</div>
          <div class="card-body">
            <form method="POST" action="{{ route('salle.update',$salle->idsalle)}}">
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
                    <label for="nomsalle">Nom Salle</label>
                    <input type="text" value="{{ $salle->nomsalle }}" name="nomsalle" class="form-control @error('nomsalle') is-invalid @enderror" id="nomsalle" placeholder="Entrer le nom de la salle">
                      @error('nomsalle')
                          <div class="alert alert-danger"> {{$message}} </div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="capacite">Capacite</label>
                    <input type="text"value="{{$salle->capacite}}" name="capacite" class="form-control @error('capacite') is-invalid @enderror" id="capacite" placeholder="Entrer la capacite de la salle">
                      @error('capacite')
                          <div class="alert alert-danger"> {{$message}} </div>
                      @enderror
                  </div>
                <button type="submit" class="btn btn-primary">Modifier le salle</button>
            </form>
          </div>
        </div>

    <div>
@endsection
