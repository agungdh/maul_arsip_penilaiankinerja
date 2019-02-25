<div class="box-body">
	@if($errors->has('data_sudah_ada'))
	<div class="callout callout-danger">
		<h4>Perhatian !!!</h4>

		<p>Data yang anda input sudah ada di dalam database !!!</p>
	</div>
	@endif

	@php
	$class = $errors->has('tahun') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('tahun') ? '<span class="help-block">' . $errors->first('tahun') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="tahun">Tahun</label>
		{!! Form::text('tahun',null,['class'=> 'form-control','placeholder'=>'Isi Tahun', 'id' => 'tahun']) !!}
		{!! $message !!}
	</div>
	
	@php
	$class = $errors->has('id_pegawai_penilai') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('id_pegawai_penilai') ? '<span class="help-block">' . $errors->first('id_pegawai_penilai') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="id_pegawai_penilai">Pegawai Penilai</label>
		{!! Form::select('id_pegawai_penilai',$pegawais,null,['class'=> 'form-control select2','placeholder'=>'Pilih Pegawai','id'=>'id_pegawai_penilai']) !!}
		{!! $message !!}
	</div>

	@php
	$class = $errors->has('id_pegawai_dinilai') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('id_pegawai_dinilai') ? '<span class="help-block">' . $errors->first('id_pegawai_dinilai') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="id_pegawai_dinilai">Pegawai Yang Dinilai</label>
		{!! Form::select('id_pegawai_dinilai',$pegawais,null,['class'=> 'form-control select2','placeholder'=>'Pilih Pegawai','id'=>'id_pegawai_dinilai']) !!}
		{!! $message !!}
	</div>
</div>