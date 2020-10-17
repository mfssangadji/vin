@extends('layouts.app')
@section('title', 'Penerimaan Beasiswa')
@section('content')
  <div class="x_panel">
        <div class="x_title">
          <h2>Data<small><i>Penerimaan Beasiswa</i></small></h2>
          <div class="clearfix"></div>
        </div>
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Siswa</th>
                <th>Sekolah</th>
                <th>Status Penerimaan</th>
                <th>Jenis Beasiswa</th>
                <th>Jumlah (Nominal)</th>
                <th>Tanggal Pengajuan</th>
                <th>Tanggal Pengambilan</th>
              </tr>
            </thead>
            <tbody>
              @foreach($beasiswa as $beasiswa)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>({{$beasiswa->siswa->nis}}) {{$beasiswa->siswa->nama_lengkap}}</td>
                  <td>{{$beasiswa->siswa->sekolah->nama_sekolah}}</td>
                  @if($beasiswa->status_penerimaan == 0)
                    <td style="border-left: 4px solid red">Belum menerima</td>
                  @else
                    <td style="border-left: 4px solid green">Sudah menerima</td>
                  @endif
                  <td>{{$jb[$beasiswa->jenis_beasiswa]}}</td>
                  <td>Rp. {{number_format($beasiswa->jumlah_nominal)}}</td>
                  <td>{{$beasiswa->tanggal_pengajuan}}</td>
                  <td>{{$beasiswa->tanggal_pengambilan}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection