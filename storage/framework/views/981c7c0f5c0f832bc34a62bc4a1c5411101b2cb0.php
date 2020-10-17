<?php $__env->startSection('title', 'Daftar Pengambilan Ijazah'); ?>
<?php $__env->startSection('content'); ?>
	    <div class="x_panel">
	      <div class="x_title">
	        <h2>Data<small><i>Pengambilan Ijazah</i></small></h2>
	        <a href="<?php echo e(route('ijazah.create')); ?>" class="btn btn-success btn-sm" style="float: right;">Tambah Baru</a>
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
	              <th>Proses</th>
	            </tr>
	          </thead>
	          <tbody>
            	<?php $__currentLoopData = $ijazah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ijazah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            		<tr>
            			<td><?php echo e($loop->iteration); ?></td>
            			<td><?php echo e($ijazah->no_ijazah); ?></td>
            			<td>(<?php echo e($ijazah->siswa->nis); ?>) <?php echo e($ijazah->siswa->nama_lengkap); ?></td>
            			<td><?php echo e($ijazah->siswa->sekolah->nama_sekolah); ?></td>
            			<?php if($ijazah->status_penerimaan == 0): ?>
            				<td style="border-left: 4px solid red">Belum mengambil</td>
            			<?php else: ?>
            				<td style="border-left: 4px solid green">Sudah mengambil</td>
            			<?php endif; ?>
            			<td><?php echo e($ijazah->tanggal_pengambilan); ?></td>
	            		<td>
			              	<a href="<?php echo e(route('ijazah').'/'.$ijazah->id.'/status'); ?>" title="ubah"><span class="badge badge-success">ubah status pengambilan</span></a>
			              	<a href="<?php echo e(route('ijazah').'/'.$ijazah->id.'/edit'); ?>" title="ubah"><span class="badge badge-warning">ubah</span></a>
			              	<form method="post" action="<?php echo e(route('ijazah').'/'.$ijazah->id); ?>" style="display:inline;">
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
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\vin\resources\views/auths/ijazah/index.blade.php ENDPATH**/ ?>