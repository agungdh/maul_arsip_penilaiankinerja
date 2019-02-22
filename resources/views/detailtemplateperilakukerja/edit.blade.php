@extends('template.template')

@section('title')
Detail Template Perilaku Kerja
@endsection

@section('nav')
@include('detailtemplateperilakukerja.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Ubah Detail Template Perilaku Kerja</h3>
			</div>

			{!! Form::model($detailtemplateperilakukerja, ['route' => ['detailtemplateperilakukerja.update', $detailtemplateperilakukerja->id], 'role' => 'form', 'method' => 'put']) !!}
				@include('detailtemplateperilakukerja.form')

				<div class="box-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="{{route('detailtemplateperilakukerja.index', $templateperilakukerja->id)}}" class="btn btn-info">Batal</a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection