<?php $__env->startSection('title', 'Tambah Pengambilan Ijazah'); ?>
<?php $__env->startSection('content'); ?>
	    <div class="x_panel">
			<div class="x_title">
				<h2>Form Tambah <small><i>Pengambilan Ijazah</i></small></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" method="post" action="<?php echo e(route('ijazah')); ?>" data-parsley-validate class="form-horizontal form-label-left">
					<?php echo csrf_field(); ?>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Siswa <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select class="form-control select2" multiple="multiple" name="siswa_id">
								<?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($siswa->id); ?>">(NIS: <?php echo e($siswa->nis); ?>) <?php echo e($siswa->nama_lengkap); ?>, <?php echo e($siswa->sekolah->nama_sekolah); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No. Ijazah <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="text" name="no_ijazah" required="required" class="form-control ">
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
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\vin\resources\views/auths/ijazah/create.blade.php ENDPATH**/ ?>