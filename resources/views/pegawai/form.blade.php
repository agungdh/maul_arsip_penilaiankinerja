<div class="box-body">

	@php
	$class = $errors->has('nip') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('nip') ? '<span class="help-block">' . $errors->first('nip') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="nip">NIP</label>
		{!! Form::text('nip',null,['class'=> 'form-control','placeholder'=>'Isi NIP', 'id' => 'nip']) !!}
		{!! $message !!}
	</div>
	
	@php
	$class = $errors->has('nama') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('nama') ? '<span class="help-block">' . $errors->first('nama') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="nama">Nama</label>
		{!! Form::text('nama',null,['class'=> 'form-control','placeholder'=>'Isi Nama', 'id' => 'nama']) !!}
		{!! $message !!}
	</div>

	@php
	$class = $errors->has('id_jabatan') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('id_jabatan') ? '<span class="help-block">' . $errors->first('id_jabatan') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="id_jabatan">Jabatan</label>
		{!! Form::select('id_jabatan',$jabatans,null,['class'=> 'form-control select2','placeholder'=>'Pilih Jabatan','id'=>'id_jabatan']) !!}
		{!! $message !!}
	</div>

	@php
	$class = $errors->has('id_unit') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('id_unit') ? '<span class="help-block">' . $errors->first('id_unit') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="id_unit">Unit Kerja</label>
		{!! Form::select('id_unit',$units,null,['class'=> 'form-control select2','placeholder'=>'Pilih Unit Kerja','id'=>'id_unit']) !!}
		{!! $message !!}
	</div>

	@php
	$class = $errors->has('id_pangkat') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('id_pangkat') ? '<span class="help-block">' . $errors->first('id_pangkat') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="id_pangkat">Pangkat</label>
		{!! Form::select('id_pangkat',$pangkats,null,['class'=> 'form-control select2','placeholder'=>'Pilih Pangkat','id'=>'id_pangkat']) !!}
		{!! $message !!}
	</div>

</div>