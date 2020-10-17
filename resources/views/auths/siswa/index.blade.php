@extends('auths.layouts.app')
@section('title', 'Daftar Siswa')
@section('content')
	    <div class="x_panel">
	      <div class="x_title">
	        <h2>Data<small><i>Siswa</i></small></h2>
	        <a href="{{route('siswa.create')}}" class="btn btn-success btn-sm" style="float: right;">Tambah Baru</a>
	        <div class="clearfix"></div>
	      </div>
	          <div class="row">
	              <div class="col-sm-12">
	                <div class="card-box table-responsive">
	        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
	          <thead>
	            <tr>
	              <th>No</th>
	              <th>NIS</th>
	              <th>Nama Lengkap</th>
	              <th>Sekolah</th>
	              <th>Jenis Kelamin</th>
	              <th>Alamat</th>
	              <th>No. Telp</th>
	              <th>Proses</th>
	            </tr>
	          </thead>
	          <tbody>
            	@foreach($siswa as $siswa)
            		<tr>
            			<td>{{$loop->iteration}}</td>
            			<td>{{$siswa->nis}}</td>
            			<td>{{$siswa->nama_lengkap}}</td>
            			<td>{{$siswa->sekolah->nama_sekolah}}</td>
            			<td>{{$jk[$siswa->jenis_kelamin]}}</td>
            			<td>{{$siswa->alamat}}</td>
            			<td>{{$siswa->no_telp}}</td>
	            		<td>
			              	<a href="{{ route('siswa').'/'.$siswa->id.'/edit' }}" title="ubah"><span class="badge badge-warning">ubah</span></a><form method="post" action="{{ route('siswa').'/'.$siswa->id }}" style="display:inline;">
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