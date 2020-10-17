@extends('auths.layouts.app')
@section('title', 'Ubah Siswa')
@section('content')
	    <div class="x_panel">
			<div class="x_title">
				<h2>Form Edit <small><i>Siswa</i></small></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" method="post" action="{{route('siswa').'/'.$siswa->id}}" data-parsley-validate class="form-horizontal form-label-left">
					@csrf
					@method('PATCH')

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Sekolah <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select class="form-control select2" multiple="multiple" name="sekolah_id">
								@foreach($sekolah as $sekolah)
									@if($sekolah->id == $siswa->sekolah_id)
										<option value="{{$sekolah->id}}" selected>{{$sekolah->nama_sekolah}}</option>
									@else
										<option value="{{$sekolah->id}}">{{$sekolah->nama_sekolah}}</option>
									@endif
								@endforeach
							</select>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">NIS <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="text" name="nis" value="{{$siswa->nis}}" required="required" class="form-control ">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Lengkap <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="nama_lengkap" value="{{$siswa->nama_lengkap}}" name="nama_lengkap" required="required" class="form-control ">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Jenis Kelamin <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select name="jenis_kelamin" class="form-control">
								<option value="" selected></option>
								@foreach($jk as $key => $val)
									@if($key == $siswa->jenis_kelamin)
										<option value="{{$key}}" selected>{{$val}}</option>
									@else
										<option value="{{$key}}">{{$val}}</option>
									@endif
								@endforeach
							</select>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alamat <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="alamat" value="{{$siswa->alamat}}" name="alamat" required="required" class="form-control ">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No. Telp <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="no_telp" value="{{$siswa->no_telp}}" name="no_telp" required="required" class="form-control ">
						</div>
					</div>

					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<button type="submit" class="btn btn-success btn-sm">Proses</button>
							<button class="btn btn-primary btn-sm" onclick="self.history.back()" type="reset">Batal</button>
						</div>
					</div>

				</form>
			</div>
		</div>
@endsection
@section('scripts')
<script>
  $(function () {
    $('.select2').select2({
          theme: "classic",
          maximumSelectionLength: 1,
    })
  })
</script>
@endsection