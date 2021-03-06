@extends('template.template')

@section('title') Tugas Pokok
@endsection

@section('nav')
@include('tugaspokok.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data SKP</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>Tahun</th>
                      <th>Penilai Penilai</th>
                      <th>Pegawai Yang Dinilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$skp->tahun}}</td>
                        <td>{{$skp->pegawaiPenilai->nama}} [{{$skp->pegawaiPenilai->nip}}]</td>
                        <td>{{$skp->pegawaiDinilai->nama}} [{{$skp->pegawaiDinilai->nip}}]</td>
                    </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>

    <div class="col-md-12">
		<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Tugas Pokok</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<a class="btn btn-success btn-sm" href="{{route('tugaspokok.create', $skp->id)}}">
                  <i class="glyphicon glyphicon-plus"></i> Tambah
                </a><br><br>
              <table class="table table-bordered table-hover datatable">
                <thead>
	                <tr>
	                  <th>Tugas Pokok</th>
	                  <th>Proses</th>
	                </tr>
                </thead>
                <tbody>
                	@foreach($tugaspokok as $item)
                	<tr>
                		<td>{{$item->tugas_pokok}}</td>
                		
                		<td>

			                {!! Form::open(['id' => 'formHapus' . $item->id, 'route' => ['tugaspokok.destroy', $item->id], 'method' => 'delete']) !!}
	                			<a class="btn btn-primary btn-sm" href="{{route('tugaspokok.edit', $item->id)}}">
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