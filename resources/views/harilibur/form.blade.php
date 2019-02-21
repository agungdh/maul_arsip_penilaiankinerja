<div class="box-body">

	@php
	$class = $errors->has('tanggal') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('tanggal') ? '<span class="help-block">' . $errors->first('tanggal') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="tanggal">Tanggal</label>
		{!! Form::text('tanggal',null,['class'=> 'form-control datepicker','placeholder'=>'Isi Tanggal', 'id' => 'tanggal', 'readonly' => true, 'style' => 'background-color: white;']) !!}
		{!! $message !!}
	</div>
</div>