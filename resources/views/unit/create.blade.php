@extends('template.template')

@section('title')
Unit Kerja
@endsection

@section('nav')
@include('unit.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah Unit Kerja</h3>
			</div>

			{!! Form::open(['route' => 'unit.store', 'role' => 'form']) !!}
				@include('unit.form')

				<div class="box-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="{{route('unit.index')}}" class="btn btn-info">Batal</a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection