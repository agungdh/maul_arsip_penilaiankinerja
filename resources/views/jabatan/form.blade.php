<div class="box-body">

	@php
	$class = $errors->has('jabatan') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('jabatan') ? '<span class="help-block">' . $errors->first('jabatan') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="jabatan">Jabatan</label>
		{!! Form::text('jabatan',null,['class'=> 'form-control','placeholder'=>'Isi Jabatan', 'id' => 'jabatan']) !!}
		{!! $message !!}
	</div>
	
</div>