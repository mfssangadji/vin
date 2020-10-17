<?php $__env->startSection('title', 'Daftar Siswa'); ?>
<?php $__env->startSection('content'); ?>
	    <div class="x_panel">
	      <div class="x_title">
	        <h2>Data<small><i>Siswa</i></small></h2>
	        <a href="<?php echo e(route('siswa.create')); ?>" class="btn btn-success btn-sm" style="float: right;">Tambah Baru</a>
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
            	<?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            		<tr>
            			<td><?php echo e($loop->iteration); ?></td>
            			<td><?php echo e($siswa->nis); ?></td>
            			<td><?php echo e($siswa->nama_lengkap); ?></td>
            			<td><?php echo e($siswa->sekolah->nama_sekolah); ?></td>
            			<td><?php echo e($jk[$siswa->jenis_kelamin]); ?></td>
            			<td><?php echo e($siswa->alamat); ?></td>
            			<td><?php echo e($siswa->no_telp); ?></td>
	            		<td>
			              	<a href="<?php echo e(route('siswa').'/'.$siswa->id.'/edit'); ?>" title="ubah"><span class="badge badge-warning">ubah</span></a><form method="post" action="<?php echo e(route('siswa').'/'.$siswa->id); ?>" style="display:inline;">
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
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\vin\resources\views/auths/siswa/index.blade.php ENDPATH**/ ?>