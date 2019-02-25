<div class="box-body">

	@php
	$class = $errors->has('tugas_pokok') ? 'form-group has-error' : 'form-group';
	$message = $errors->has('tugas_pokok') ? '<span class="help-block">' . $errors->first('tugas_pokok') . '</span>' : '';
	@endphp
	<div class="{{$class}}">
		<label for="tugas_pokok">Tugas Pokok</label>
		{!! Form::text('tugas_pokok',null,['class'=> 'form-control','placeholder'=>'Isi Tugas Pokok', 'id' => 'tugas_pokok']) !!}
		{!! $message !!}
	</div>
	
</div>