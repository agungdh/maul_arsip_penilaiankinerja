@extends('template.template')

@section('title')
Pangkat
@endsection

@section('nav')
@include('pangkat.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Ubah Pangkat</h3>
			</div>

			{!! Form::model($pangkat, ['route' => ['pangkat.update', $pangkat->id], 'role' => 'form', 'method' => 'put']) !!}
				@include('pangkat.form')

				<div class="box-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="{{route('pangkat.index')}}" class="btn btn-info">Batal</a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection