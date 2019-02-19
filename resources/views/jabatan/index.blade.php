@extends('template.template')

@section('title')
Jabatan
@endsection

@section('nav')
@include('jabatan.nav')
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
@endsection