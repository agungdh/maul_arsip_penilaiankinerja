<div class="box-body">

	@php
	$class = $errors->has('perilaku_kerja') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('perilaku_kerja') ? '<span class="help-block">' . $errors->first('perilaku_kerja') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="perilaku_kerja">Perilaku Kerja</label>
		{!! Form::text('perilaku_kerja',null,['class'=> 'form-control','placeholder'=>'Isi Perilaku Kerja', 'id' => 'perilaku_kerja']) !!}
		{!! $message !!}
	</div>
	
</div>