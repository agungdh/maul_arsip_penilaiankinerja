@extends('template.template')

@section('title')
Template Tugas Pokok
@endsection

@section('nav')
@include('templatetugaspokok.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Template Tugas Pokok</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<a class="btn btn-success btn-sm" href="{{route('templatetugaspokok.create')}}">
                  <i class="glyphicon glyphicon-plus"></i> Tambah
                </a><br><br>
              <table class="table table-bordered table-hover datatable">
                <thead>
	                <tr>
	                  <th>Keterangan</th>
	                  <th>Proses</th>
	                </tr>
                </thead>
                <tbody>
                	@foreach($templatetugaspokok as $item)
                	<tr>
                		<td>{{$item->keterangan}}</td>
                		
                		<td>

			                {!! Form::open(['id' => 'formHapus' . $item->id, 'route' => ['templatetugaspokok.destroy', $item->id], 'method' => 'delete']) !!}
	                			<a class="btn btn-default btn-sm" href="{{route('detailtemplatetugaspokok.index', $item->id)}}">
                                  <i class="glyphicon glyphicon-list"></i> Detail
                                </a>

                                <a class="btn btn-primary btn-sm" href="{{route('templatetugaspokok.edit', $item->id)}}">
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