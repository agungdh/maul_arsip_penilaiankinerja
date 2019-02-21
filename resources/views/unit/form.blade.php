<div class="box-body">

	@php
	$class = $errors->has('unit') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('unit') ? '<span class="help-block">' . $errors->first('unit') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="unit">Unit Kerja</label>
		{!! Form::text('unit',null,['class'=> 'form-control','placeholder'=>'Isi Unit Kerja', 'id' => 'unit']) !!}
		{!! $message !!}
	</div>
	
</div>