@extends('template.template')

@section('title')
Pegawai
@endsection

@section('nav')
@include('pegawai.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<a class="btn btn-success btn-sm" href="{{route('pegawai.create')}}">
                  <i class="glyphicon glyphicon-plus"></i> Tambah
                </a><br><br>
              <table class="table table-bordered table-hover datatable">
                <thead>
	                <tr>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Jabatan</th>
                      <th>Unit Kerja</th>
	                  <th>Pangkat</th>
	                  <th>Proses</th>
	                </tr>
                </thead>
                <tbody>
                	@foreach($pegawai as $item)
                	<tr>
                        <td>{{$item->nip}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->jabatan->jabatan}}</td>
                        <td>{{$item->unit->unit}}</td>
                        <td>{{$item->pangkat->golongan . $item->pangkat->ruang}} {{$item->pangkat->pangkat}}</td>
                		
                		<td>

			                {!! Form::open(['id' => 'formHapus' . $item->id, 'route' => ['pegawai.destroy', $item->id], 'method' => 'delete']) !!}
	                			<a class="btn btn-primary btn-sm" href="{{route('pegawai.edit', $item->id)}}">
				                  <i class="glyphicon glyphicon-pencil"></i> Edit
				                </a>

			              		<button type="button" class="btn btn-danger btn-sm" onclick="hapus('{{ $item->id }}')"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
			              	{!! Form::close() !!}
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

@section('js')
<script type="text/javascript">
function hapus(id) {
	swal({
	  title: "Yakin Hapus ???",
	  text: "Data yang sudah dihapus tidak dapat dikembalikan lagi !!!",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonColor: "#DD6B55",
	  confirmButtonText: "Hapus",
	}, function(){
	  $("#formHapus" + id).submit();
	});
}
</script>
@endsection