@extends('template.template')

@section('title')
Detail Template Tugas Pokok
@endsection

@section('nav')
@include('detailtemplatetugaspokok.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Template Tugas Pokok</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$templatetugaspokok->keterangan}}</td>
                    </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
    
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah Detail Template Tugas Pokok</h3>
			</div>

			{!! Form::open(['route' => ['detailtemplatetugaspokok.store', $templatetugaspokok->id], 'role' => 'form']) !!}
				@include('detailtemplatetugaspokok.form')

				<div class="box-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="{{route('detailtemplatetugaspokok.index', $templatetugaspokok->id)}}" class="btn btn-info">Batal</a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection