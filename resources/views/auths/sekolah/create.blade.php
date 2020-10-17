@extends('auths.layouts.app')
@section('title', 'Tambah Sekolah')
@section('content')
	    <div class="x_panel">
			<div class="x_title">
				<h2>Form Tambah <small><i>Sekolah</i></small></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" method="post" action="{{route('sekolah')}}" data-parsley-validate class="form-horizontal form-label-left">
					@csrf

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Sekolah <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="text" name="nama_sekolah" required="required" class="form-control ">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alamat <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="alamat" name="alamat" required="required" class="form-control ">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No. Telp <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="no_telp" name="no_telp" required="required" class="form-control ">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tingkatan Pendidikan <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select class="form-control" name="tingkatan_pendidikan">
								<option value="" selected></option>
								@foreach($tp as $key => $val)
									<option value="{{$key}}">{{$val}}</option>
								@endforeach
							</select>
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