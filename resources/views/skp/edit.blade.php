@extends('template.template')

@section('title')
Sasaran Kerja Pegawai
@endsection

@section('nav')
@include('skp.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Ubah Sasaran Kerja Pegawai</h3>
			</div>

			{!! Form::model($skp, ['route' => ['skp.update', $skp->id], 'role' => 'form', 'method' => 'put']) !!}
				@include('skp.form')

				<div class="box-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="{{route('skp.index')}}" class="btn btn-info">Batal</a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection