@extends('template.template')

@section('title')
Template Tugas Pokok
@endsection

@section('nav')
@include('templatetugaspokok.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah Template Tugas Pokok</h3>
			</div>

			{!! Form::open(['route' => 'templatetugaspokok.store', 'role' => 'form']) !!}
				@include('templatetugaspokok.form')

				<div class="box-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="{{route('templatetugaspokok.index')}}" class="btn btn-info">Batal</a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection