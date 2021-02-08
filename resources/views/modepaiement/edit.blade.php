@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification d'un modepaiemen</div>
          <div class="card-body">
            <form method="POST" action="{{ route('modepaiement.update',$modepaiement->idmodepaiement)}}">
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
                  <label for="liellemodepaiement">Mode paiement</label>
                  <input type="text" name="liellemodepaiement" value="{{ $modepaiement->liellemodepaiement}}" class="form-control @error('nomliellemodepaiement') is-invalid @enderror" id="nomliellemodepaiement" placeholder="Entrer le liellemodepaiement">
                    @error('liellemodepaiement')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Modifier le modepaiement</button>
            </form>
          </div>
        </div>

    <div>
@endsection
