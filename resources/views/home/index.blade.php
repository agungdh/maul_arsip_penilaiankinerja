@extends('template.template')

@section('title')
Home
@endsection

@section('nav')
@include('home.nav')
@endsection

@section('content')
<form>
<div class="box-body">
    <input name="kodenota" class="form-control input-lg text-center" autocomplete="off" type="text" placeholder="Kode Nota" id="kodenota">
    <br>
    <input class="btn btn-success center-block" type="submit">
</div>
</form>
@endsection

@section('js')
<script type="text/javascript">
	$("#kodenota").inputmask("\\#9{1,11}",{removeMaskOnSubmit: true });
	$("form").submit(function(event) {
		event.preventDefault();
		if (!$("#kodenota").inputmask("isComplete")){
			swal('error', 'error', 'error');
		} else {
			$("form").unbind();
			$("form").submit();
		}
	});
</script>
@endsection