@extends('template.template')

@section('title')
Hari Libur
@endsection

@section('nav')
@include('harilibur.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Ubah Hari Libur</h3>
			</div>

			{!! Form::model($harilibur, ['route' => ['harilibur.update', $harilibur->id], 'role' => 'form', 'method' => 'put']) !!}
				@include('harilibur.form')

				<div class="box-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="{{route('harilibur.index')}}" class="btn btn-info">Batal</a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection