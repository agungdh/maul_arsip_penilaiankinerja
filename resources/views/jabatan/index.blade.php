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
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover datatable">
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
                			<a class="btn btn-success btn-sm" href="<?php echo base_url('pegawai/ubah_pegawai/'.$item->nip); ?>">
			                  <i class="glyphicon glyphicon-pencil"></i>  Edit
			                </a>
			                <a onclick="return konfirmasi()" class="btn btn-danger btn-sm" href="<?php echo base_url('pegawai/hapus_pegawai/'.$item->nip); ?>"><i class="glyphicon glyphicon-trash"></i>  Hapus</a>	
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