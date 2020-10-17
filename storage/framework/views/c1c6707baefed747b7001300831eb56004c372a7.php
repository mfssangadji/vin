<?php $__env->startSection('title', 'Daftar Penerimaan Beasiswa'); ?>
<?php $__env->startSection('content'); ?>
	    <div class="x_panel">
	      <div class="x_title">
	        <h2>Data<small><i>Penerimaan Beasiswa</i></small></h2>
	        <a href="<?php echo e(route('beasiswa.create')); ?>" class="btn btn-success btn-sm" style="float: right;">Tambah Baru</a>
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
	              <th>Proses</th>
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
	            		<td>
			              	<a href="<?php echo e(route('beasiswa').'/'.$beasiswa->id.'/status'); ?>" title="ubah"><span class="badge badge-success">ubah status pengambilan</span></a>
			              	<a href="<?php echo e(route('beasiswa').'/'.$beasiswa->id.'/edit'); ?>" title="ubah"><span class="badge badge-warning">ubah</span></a>
			              	<form method="post" action="<?php echo e(route('beasiswa').'/'.$beasiswa->id); ?>" style="display:inline;">
            					<?php echo method_field('DELETE'); ?>
            					<?php echo csrf_field(); ?>
            				<button type="submit" class="" style="background-color: transparent; border:none; color: red" onclick="return confirm('Apakan anda yakin?')" style="border: none;"><span class="badge badge-danger">hapus</span></button>
            				</form>
			            </td>
            		</tr>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\vin\resources\views/auths/beasiswa/index.blade.php ENDPATH**/ ?>