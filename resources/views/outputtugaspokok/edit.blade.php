@extends('template.template')

@section('title')
Output Tugas Pokok
@endsection

@section('nav')
@include('outputtugaspokok.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Ubah Output Tugas Pokok</h3>
			</div>

			{!! Form::model($outputtugaspokok, ['route' => ['outputtugaspokok.update', $outputtugaspokok->id], 'role' => 'form', 'method' => 'put']) !!}
				@include('outputtugaspokok.form')

				<div class="box-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="{{route('outputtugaspokok.index')}}" class="btn btn-info">Batal</a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection