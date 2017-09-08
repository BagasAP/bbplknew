@extends('layouts.master')
@section('contents')
		<div class="col-md-12">
			<div class="panel panel-primary">
        <header class="panel-heading"><b>Tambah Kejuruan</b></header>
					<div class="form-horizontal">
					  <form action="{{route('kejuruan.store')}}" method="post" >
					    {{ csrf_field() }}
						  <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Kode Kejuruan</label>
                  <div class="col-sm-4">
                    <input name="kd_kejuruan" type="text" class="form-control" required  />
                      {!! $errors->first('kd_kejuruan', '<p class="help-block">Data Sudah Ada</p>') !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nama Kejuruan</label>
                  <div class="col-sm-4">
                    <input name="nama_kejuruan" type="text" class="form-control" required  />
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-4">
                    <input name="keterangan" type="text" class="form-control" required  />
                  </div>
              </div>
              <div class="form-group" style="margin-bottom: 20px;">
                <label class="col-sm-2 col-sm-2 control-label"></label>
                  <div class="form-group">
                    <div class="col-md-4">
                      <button type="Submit" value="Simpan" class="btn btn-primary">Simpan</button>
                      <td><a class="btn btn-danger" href="{{URL::previous()}}">Batal</a></td>
                    </div>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>

@endsection