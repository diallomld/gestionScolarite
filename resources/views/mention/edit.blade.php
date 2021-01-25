@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification d'une mention</div>
          <div class="card-body">
            <form method="post" action="{{ route('mention.update', $mention->idmention)}}">
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
                  <label for="iddomaine">Nom Domaine</label>

                  <select name="iddomaine" class="form-control @error('iddomaine') is-invalid @enderror" id="iddomaine">
                    @foreach ($domaines as $domaine)
                        <option value="{{ $domaine->iddomaine }}">{{ $domaine->nomdomaine }}</option>
                    @endforeach
                  </select>
                  @error('iddomaine')
                        <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nommention">Nom mention</label>
                    <input name="nommention" value="{{ $mention->nommention }}" class="form-control @error('nommention') is-invalid @enderror" id="nommention">
                    @error('nommention')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Modifier la mention</button>
            </form>
          </div>
        </div>

    <div>
@endsection
