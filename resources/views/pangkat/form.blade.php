<div class="box-body">

	@php
	$class = $errors->has('golongan') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('golongan') ? '<span class="help-block">' . $errors->first('golongan') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="golongan">Golongan</label>
		{!! Form::text('golongan',null,['class'=> 'form-control','placeholder'=>'Isi Golongan', 'id' => 'golongan']) !!}
		{!! $message !!}
	</div>

	@php
	$class = $errors->has('ruang') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('ruang') ? '<span class="help-block">' . $errors->first('ruang') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="ruang">Ruang</label>
		{!! Form::text('ruang',null,['class'=> 'form-control','placeholder'=>'Isi Ruang', 'id' => 'ruang']) !!}
		{!! $message !!}
	</div>

	@php
	$class = $errors->has('pangkat') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('pangkat') ? '<span class="help-block">' . $errors->first('pangkat') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="pangkat">Pangkat</label>
		{!! Form::text('pangkat',null,['class'=> 'form-control','placeholder'=>'Isi Pangkat', 'id' => 'pangkat']) !!}
		{!! $message !!}
	</div>
	
</div>