<?php $__env->startSection('title', 'Ubah Penerimaan Beasiswa'); ?>
<?php $__env->startSection('content'); ?>
	    <div class="x_panel">
			<div class="x_title">
				<h2>Form Edit <small><i>Penerimaan Beasiswa</i></small></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" method="post" action="<?php echo e(route('beasiswa').'/'.$beasiswa->id); ?>" data-parsley-validate class="form-horizontal form-label-left">
					<?php echo csrf_field(); ?>
					<?php echo method_field('PATCH'); ?>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Siswa <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select class="form-control select2" multiple="multiple" name="siswa_id">
								<?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($siswa->id == $beasiswa->siswa_id): ?>
										<option value="<?php echo e($siswa->id); ?>" selected>(NIS: <?php echo e($siswa->nis); ?>) <?php echo e($siswa->nama_lengkap); ?>, <?php echo e($siswa->sekolah->nama_sekolah); ?></option>
									<?php else: ?>
										<option value="<?php echo e($siswa->id); ?>">(NIS: <?php echo e($siswa->nis); ?>) <?php echo e($siswa->nama_lengkap); ?>, <?php echo e($siswa->sekolah->nama_sekolah); ?></option>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Jenis Beasiswa <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select name="jenis_beasiswa" class="form-control" required>
								<option value="" selected></option>
								<?php $__currentLoopData = $jb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($key == $beasiswa->jenis_beasiswa): ?>
										<option value="<?php echo e($key); ?>" selected><?php echo e($val); ?></option>
									<?php else: ?>
										<option value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Jumlah <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" name="jumlah_nominal" value="<?php echo e($beasiswa->jumlah_nominal); ?>" class="form-control" required>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Pengajuan <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input id="birthday" name="tanggal_pengajuan" class="date-picker form-control" placeholder="dd-mm-yyyy" value="<?php echo e($beasiswa->tanggal_pengajuan); ?>" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
							<script>
								function timeFunctionLong(input) {
									setTimeout(function() {
										input.type = 'text';
									}, 60000);
								}
							</script>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
  $(function () {
    $('.select2').select2({
          theme: "classic",
          maximumSelectionLength: 1,
    })
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\vin\resources\views/auths/beasiswa/edit.blade.php ENDPATH**/ ?>