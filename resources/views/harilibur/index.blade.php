@extends('template.template')

@section('title')
Hari Libur
@endsection

@section('nav')
@include('harilibur.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Hari Libur</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<a class="btn btn-success btn-sm" href="{{route('harilibur.create')}}">
                  <i class="glyphicon glyphicon-plus"></i> Tambah
                </a><br><br>
              <table class="table table-bordered table-hover datatable">
                <thead>
	                <tr>
                      <th>Tanggal</th>
	                  <th>Keterangan</th>
	                  <th>Proses</th>
	                </tr>
                </thead>
                <tbody>
                	@foreach($harilibur as $item)
                	<tr>
                		<td>{{$pustaka->tanggalIndo($item->tanggal)}}</td>
                		<td>{{$item->keterangan}}</td>

                		<td>

			                {!! Form::open(['id' => 'formHapus' . $item->id, 'route' => ['harilibur.destroy', $item->id], 'method' => 'delete']) !!}
	                			<a class="btn btn-primary btn-sm" href="{{route('harilibur.edit', $item->id)}}">
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

    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-body">
          <div id="kalender"></div>
        </div>
      </div>
    </div>

    {!! Form::model($inputs, ['route' => ['harilibur.index'], 'role' => 'form', 'method' => 'get']) !!}

    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-body">
          <div class="box-body">

            @php
            $class = $errors->has('tanggal') ? 'form-group has-error' : 'form-group';
            $message = $errors->has('tanggal') ? '<span class="help-block">' . $errors->first('tanggal') . '</span>' : '';
            @endphp
            <div class="{{$class}}">
                <label for="tanggal">Tanggal</label>
                {!! Form::text('tanggal',null,['class'=> 'form-control datepicker','placeholder'=>'Isi Tanggal', 'id' => 'tanggal', 'readonly' => true, 'style' => 'background-color: white;']) !!}
                {!! $message !!}
            </div>

            @php
            $class = $errors->has('durasi') ? 'form-group has-error' : 'form-group';
            $message = $errors->has('durasi') ? '<span class="help-block">' . $errors->first('durasi') . '</span>' : '';
            @endphp
            <div class="{{$class}}">
                <label for="durasi">Durasi (hari)</label>
                {!! Form::number('durasi',null,['class'=> 'form-control','placeholder'=>'Isi Durasi (hari)', 'id' => 'durasi']) !!}
                {!! $message !!}
            </div>

        </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-body">

            @php
            $class = $errors->has('deadline') ? 'form-group has-error' : 'form-group';
            $message = $errors->has('deadline') ? '<span class="help-block">' . $errors->first('deadline') . '</span>' : '';
            @endphp
            <div class="{{$class}}">
                <label for="deadline">Deadline</label>
                {!! Form::text('deadline',$deadline,['class'=> 'form-control','placeholder'=>'Isi Deadline', 'id' => 'deadline', 'readonly' => true]) !!}
                {!! $message !!}
            </div>

        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-success">Hitung</button>
        </div>
      </div>
    </div>

    {!! Form::close() !!}
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
<script type="text/javascript">
$(function() {
  $('#kalender').fullCalendar({
    events: [
        @foreach($harilibur as $item)
        {
          title  : '{{$item->keterangan}}',
          start  : '{{$item->tanggal}}'
        },
        @endforeach
    ]
  });
});
</script>
@endsection