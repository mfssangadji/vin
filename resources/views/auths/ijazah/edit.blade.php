@extends('auths.layouts.app')
@section('title', 'Ubah Pengambilan Ijazah')
@section('content')
	    <div class="x_panel">
			<div class="x_title">
				<h2>Form Edit <small><i>Pengambilan Ijazah</i></small></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" method="post" action="{{route('ijazah').'/'.$ijazah->id}}" data-parsley-validate class="form-horizontal form-label-left">
					@csrf
					@method('PATCH')

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Siswa <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select class="form-control select2" multiple="multiple" name="siswa_id">
								@foreach($siswa as $siswa)
									@if($siswa->id == $ijazah->siswa_id)
										<option value="{{$siswa->id}}" selected>(NIS: {{$siswa->nis}}) {{$siswa->nama_lengkap}}, {{$siswa->sekolah->nama_sekolah}}</option>
									@else
										<option value="{{$siswa->id}}">(NIS: {{$siswa->nis}}) {{$siswa->nama_lengkap}}, {{$siswa->sekolah->nama_sekolah}}</option>
									@endif
								@endforeach
							</select>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No. Ijazah <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="text" value="{{$ijazah->no_ijazah}}" name="no_ijazah" required="required" class="form-control ">
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