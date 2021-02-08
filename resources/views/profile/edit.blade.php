@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification des profile</div>
          <div class="card-body">
            <form method="post" action="{{ route('profile.update', $profile->id)}}">
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
                    <label for="nomprofile">Nom profile</label>
                    <input name="nomprofile" value="{{ $profile->nomprofile }}" class="form-control @error('nomprofile') is-invalid @enderror" id="nomprofile">
                    @error('nomprofile')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Modifier la profile</button>
            </form>
          </div>
        </div>

    <div>
@endsection
