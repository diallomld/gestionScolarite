@extends('master')

@section('content')
    <div class="align-content-md-center">

        <div class="card text-left">
            <div class="card-header">Formulaire de modification des notes</div>
          <div class="card-body">
            <form method="post" action="{{ route('note.update', $note->idnote)}}">
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
                    <label for="note">Note</label>
                    <input name="note" value="{{ $note->note }}" class="form-control @error('note') is-invalid @enderror" id="note">
                    @error('note')
                      <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Modifier la note</button>
            </form>
          </div>
        </div>

    <div>
@endsection
