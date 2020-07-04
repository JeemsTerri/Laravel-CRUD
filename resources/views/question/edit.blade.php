@extends('app')

@section('page-header', "List Pertanyaan")

@section('content')

<form action="{{ route('pertanyaan.update', $question->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambahkan Pertanyaan</h3>
        </div>

        <div class="card-body">
              <div class="form-group">
                <label for="judul">Pertanyaan</label>
                <input type="text" class="form-control" name="judul" value="{{ $question->judul }}">
              </div>
              <div class="form-group">
                <label for="isi">Isi Pertanyaan</label>
                <textarea class="form-control" name="isi"  cols="30" rows="10">{{ $question->isi }}</textarea>
              </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection
