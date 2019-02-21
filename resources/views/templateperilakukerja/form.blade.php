<div class="box-body">

	@php
	$class = $errors->has('keterangan') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('keterangan') ? '<span class="help-block">' . $errors->first('keterangan') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="keterangan">Keterangan</label>
		{!! Form::text('keterangan',null,['class'=> 'form-control','placeholder'=>'Isi Keterangan', 'id' => 'keterangan']) !!}
		{!! $message !!}
	</div>
	
</div>