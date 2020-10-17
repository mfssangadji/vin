@extends('auths.layouts.app')
@section('title', 'Daftar Sekolah')
@section('content')
	    <div class="x_panel">
	      <div class="x_title">
	        <h2>Data<small><i>Sekolah</i></small></h2>
	        <a href="{{route('sekolah.create')}}" class="btn btn-success btn-sm" style="float: right;">Tambah Baru</a>
	        <div class="clearfix"></div>
	      </div>
	          <div class="row">
	              <div class="col-sm-12">
	                <div class="card-box table-responsive">
	        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
	          <thead>
	            <tr>
	              <th>No</th>
	              <th>Nama Sekolah</th>
	              <th>Alamat</th>
	              <th>No. Telp</th>
	              <th>Proses</th>
	            </tr>
	          </thead>
	          <tbody>
            	@foreach($sekolah as $sekolah)
            		<tr>
            			<td>{{$loop->iteration}}</td>
            			<td>{{$sekolah->nama_sekolah}}</td>
            			<td>{{$sekolah->alamat}}</td>
            			<td>{{$sekolah->no_telp}}</td>
	            		<td>
			              	<a href="{{ route('sekolah').'/'.$sekolah->id.'/edit' }}" title="ubah"><span class="badge badge-warning">ubah</span></a><form method="post" action="{{ route('sekolah').'/'.$sekolah->id }}" style="display:inline;">
            					@method('DELETE')
            					@csrf
            				<button type="submit" class="" style="background-color: transparent; border:none; color: red" onclick="return confirm('Apakan anda yakin?')" style="border: none;"><span class="badge badge-danger">hapus</span></button>
            				</form>
			            </td>
            		</tr>
            	@endforeach
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
@endsection