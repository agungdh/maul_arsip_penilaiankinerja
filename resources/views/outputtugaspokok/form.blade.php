<div class="box-body">

	@php
	$class = $errors->has('output') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('output') ? '<span class="help-block">' . $errors->first('output') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="output">Output</label>
		{!! Form::text('output',null,['class'=> 'form-control','placeholder'=>'Isi Output', 'id' => 'output']) !!}
		{!! $message !!}
	</div>

	@php
	$class = $errors->has('alias') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('alias') ? '<span class="help-block">' . $errors->first('alias') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="alias">Alias</label>
		{!! Form::text('alias',null,['class'=> 'form-control','placeholder'=>'Isi Alias', 'id' => 'alias']) !!}
		{!! $message !!}
	</div>
	
</div>