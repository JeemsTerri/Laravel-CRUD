@extends('app')

@section('page-header', "List Pertanyaan")

@section('content')
<div class="row">

    <div class="col-lg-12">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Detail Pertanyaan</h3>
            </div>

            <div class="card-body">
                <h5>{{ $question->judul }}</h5>
                <hr>
                <p>{{ $question->isi }}</p>
            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <span class="description">
                            Created at :
                            {{ $question->created_at->formatLocalized('%H-%m-%Y - %H:%M') }}
                        </span>
                        ||
                        @if($question->created_at != $question->updated_at)
                            <span class="description">
                                Updated at :
                                {{ $question->updated_at->formatLocalized('%H-%m-%Y - %H:%M') }}
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="text-right">
                            <a class="btn btn-info btn-sm" href="{{ route('pertanyaan.edit', $question->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{ route('pertanyaan.delete', $question->id) }}">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </div>

    <div class="col-lg-11 offset-lg-1 mb-2">
        <form action="{{ route('answer.store', $question->id) }}" method="POST">
        @csrf
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Buat jawaban baru</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                    <div class="form-group">
                        <label for="isi">Isi Jawaban</label>
                        <textarea class="form-control" name="isi"  cols="30" rows="10"></textarea>
                      </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    </div>

    <div class="col-lg-11 offset-lg-1 mt-2">
        
        @foreach($question->answers->sortByDesc('created_at') as $answer)
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Jawaban - {{ $question->answers->count() - $loop->iteration +1  }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <p>{{ $answer->isi }}</p>
                </div>
                <div class="card-footer">
                    <div class="row">
                    <div class="col-md-6">
                    <span class="description">
                        Created at :
                        {{ $answer->created_at->formatLocalized('%H-%m-%Y - %H:%M') }}
                    </span>
                    @if($answer->created_at != $answer->updated_at)
                        <span class="description">
                            Updated at :
                            {{ $answer->updated_at->formatLocalized('%H-%m-%Y - %H:%M') }}
                        </span>
                    @endif
                    </div>
                    <div class="col-md-6">
                        <div class="text-right">
                            <a class="btn btn-info btn-sm" href="{{ route('answer.show', $answer->id) }}">
                                View
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
