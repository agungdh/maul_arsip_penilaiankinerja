<div class="box-body">

	@php
	$class = $errors->has('satuan_waktu') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('satuan_waktu') ? '<span class="help-block">' . $errors->first('satuan_waktu') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="satuan_waktu">Satuan Waktu</label>
		{!! Form::text('satuan_waktu',null,['class'=> 'form-control','placeholder'=>'Isi Satuan Waktu', 'id' => 'satuan_waktu']) !!}
		{!! $message !!}
	</div>
	
</div>