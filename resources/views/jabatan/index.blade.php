@extends('template.template')

@section('title')
Jabatan
@endsection

@section('nav')
@include('jabatan.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Jabatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<a class="btn btn-success btn-sm" href="{{route('jabatan.create')}}">
                  <i class="glyphicon glyphicon-plus"></i> Tambah
                </a><br><br>
              <table class="table table-bordered table-hover datatable">
                <thead>
	                <tr>
	                  <th>Jabatan</th>
	                  <th>Proses</th>
	                </tr>
                </thead>
                <tbody>
                	@foreach($jabatan as $item)
                	<tr>
                		<td>{{$item->jabatan}}</td>
                		
                		<td>
                			<a class="btn btn-primary btn-sm" href="{{route('jabatan.edit', $item->id)}}">
			                  <i class="glyphicon glyphicon-pencil"></i> Edit
			                </a>
			                <a onclick="return konfirmasi()" class="btn btn-danger btn-sm" href=""><i class="glyphicon glyphicon-trash"></i> Hapus</a>	
                		</td>
                	</tr>
                	@endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	</div>
</div>
@endsection