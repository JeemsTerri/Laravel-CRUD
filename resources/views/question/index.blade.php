@extends('app')

@push('css')
	<!-- DataTables -->
	<link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush

@section('page-header', "Pertanyaan")

@section('content')

<div class="card card-widget">
    <div class="card-header">
        <h3 class="card-title">Table Pertanyaan</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col table-responsive">
                <table id="question-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Jumlah Jawaban</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($questions as $question)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $question->judul }}</td>
                                <td>{{ Str::limit($question->isi, 60, $end='...') }}
                                </td>
                                <td>{{ $question->answers->count() }}</td>
                                <td class="text-right" style="max-width: 150px">
                                    <a class="btn btn-primary btn-sm" href="{{ route('pertanyaan.show', $question->id) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ route('pertanyaan.edit', $question->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
									</a>
									<form style="display: inline;" action="{{ route('pertanyaan.delete', $question->id) }}" method="post">
										@csrf
										@method("DELETE")
										<button class="btn btn-danger btn-sm">
											<i class="fas fa-trash">
											</i>
											Delete
										</button>
									</form>
                                </td>
                            </tr>


                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    @endsection

	

	@push('script')
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#question-table").DataTable();
  });
</script>
@endpush