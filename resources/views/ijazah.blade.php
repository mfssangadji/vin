@extends('layouts.app')
@section('title', 'Pengambilan Ijazah')
@section('content')
  <div class="x_panel">
        <div class="x_title">
          <h2>Data<small><i>Pengambilan Ijazah</i></small></h2>
          <div class="clearfix"></div>
        </div>
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>No. Ijazah</th>
                <th>Siswa</th>
                <th>Sekolah</th>
                <th>Status Pengambilan</th>
                <th>Tanggal Pengambilan</th>
              </tr>
            </thead>
            <tbody>
              @foreach($ijazah as $ijazah)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$ijazah->no_ijazah}}</td>
                  <td>({{$ijazah->siswa->nis}}) {{$ijazah->siswa->nama_lengkap}}</td>
                  <td>{{$ijazah->siswa->sekolah->nama_sekolah}}</td>
                  @if($ijazah->status_penerimaan == 0)
                    <td style="border-left: 4px solid red">Belum mengambil</td>
                  @else
                    <td style="border-left: 4px solid green">Sudah mengambil</td>
                  @endif
                  <td>{{$ijazah->tanggal_pengambilan}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection