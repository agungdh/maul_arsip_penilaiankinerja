@extends('template.template')

@section('title')
Satuan Waktu
@endsection

@section('nav')
@include('satuanwaktu.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah Satuan Waktu</h3>
			</div>

			{!! Form::open(['route' => 'satuanwaktu.store', 'role' => 'form']) !!}
				@include('satuanwaktu.form')

				<div class="box-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="{{route('satuanwaktu.index')}}" class="btn btn-info">Batal</a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection