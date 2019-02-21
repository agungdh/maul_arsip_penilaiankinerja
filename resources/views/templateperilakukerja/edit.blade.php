@extends('template.template')

@section('title')
Template Perilaku Kerja
@endsection

@section('nav')
@include('templateperilakukerja.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Ubah Template Perilaku Kerja</h3>
			</div>

			{!! Form::model($templateperilakukerja, ['route' => ['templateperilakukerja.update', $templateperilakukerja->id], 'role' => 'form', 'method' => 'put']) !!}
				@include('templateperilakukerja.form')

				<div class="box-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="{{route('templateperilakukerja.index')}}" class="btn btn-info">Batal</a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection