@extends('template.template')

@section('title')
Jabatan
@endsection

@section('nav')
@include('jabatan.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Ubah Jabatan</h3>
			</div>

			{!! Form::model($jabatan, ['route' => ['jabatan.update', $jabatan->id], 'role' => 'form']) !!}
				@include('jabatan.form')

				<div class="box-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="{{route('jabatan.index')}}" class="btn btn-info">Batal</a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection