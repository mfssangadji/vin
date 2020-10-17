
<?php $__env->startSection('title', 'Penerimaan Beasiswa'); ?>
<?php $__env->startSection('content'); ?>
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
              <?php $__currentLoopData = $beasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td>(<?php echo e($beasiswa->siswa->nis); ?>) <?php echo e($beasiswa->siswa->nama_lengkap); ?></td>
                  <td><?php echo e($beasiswa->siswa->sekolah->nama_sekolah); ?></td>
                  <?php if($beasiswa->status_penerimaan == 0): ?>
                    <td style="border-left: 4px solid red">Belum menerima</td>
                  <?php else: ?>
                    <td style="border-left: 4px solid green">Sudah menerima</td>
                  <?php endif; ?>
                  <td><?php echo e($jb[$beasiswa->jenis_beasiswa]); ?></td>
                  <td>Rp. <?php echo e(number_format($beasiswa->jumlah_nominal)); ?></td>
                  <td><?php echo e($beasiswa->tanggal_pengajuan); ?></td>
                  <td><?php echo e($beasiswa->tanggal_pengambilan); ?></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\vin\resources\views/beasiswa.blade.php ENDPATH**/ ?>