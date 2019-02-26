@extends('template.template')

@section('title')
Sasaran Kerja Pegawai
@endsection

@section('nav')
@include('skp.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Sasaran Kerja Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<a class="btn btn-success btn-sm" href="{{route('skp.create')}}">
                  <i class="glyphicon glyphicon-plus"></i> Tambah
                </a><br><br>
              <table class="table table-bordered table-hover datatable">
                <thead>
	                <tr>
	                  <th>Tahun</th>
                      <th>Penilai Penilai</th>
                      <th>Pegawai Yang Dinilai</th>
	                  <th>Proses</th>
	                </tr>
                </thead>
                <tbody>
                	@foreach($skp as $item)
                	<tr>
                        <td>{{$item->tahun}}</td>
                        <td>{{$item->pegawaiPenilai->nama}} [{{$item->pegawaiPenilai->nip}}]</td>
                		<td>{{$item->pegawaiDinilai->nama}} [{{$item->pegawaiDinilai->nip}}]</td>
                		
                		<td>

			                {!! Form::open(['id' => 'formHapus' . $item->id, 'route' => ['skp.destroy', $item->id], 'method' => 'delete']) !!}
                        <a class="btn btn-default btn-sm" href="{{route('tugaspokok.index', $item->id)}}">
                          <i class="glyphicon glyphicon-list"></i> Tugas Pokok
                        </a>

	                			<a class="btn btn-primary btn-sm" href="{{route('skp.edit', $item->id)}}">
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