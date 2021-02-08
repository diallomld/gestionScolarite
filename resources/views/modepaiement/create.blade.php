@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire d'ajout d'un Mode de paiement</div>
          <div class="card-body">
            <form method="POST" action="{{ route('modepaiement.store')}}">
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
                  <label for="modepaiement">mode de paiement</label>
                  <input type="text" name="liellemodepaiement" class="form-control @error('modepaiement') is-invalid @enderror" id="modepaiement" placeholder="Entrer le mode de paiement">
                    @error('modepaiement')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter le mode de paiement</button>
            </form>
          </div>
        </div>

    <div>
@endsection
