<?php $__env->startSection('title', 'Ubah Sekolah'); ?>
<?php $__env->startSection('content'); ?>
	    <div class="x_panel">
			<div class="x_title">
				<h2>Form Edit <small><i>Sekolah</i></small></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" method="post" action="<?php echo e(route('sekolah').'/'.$sekolah->id); ?>" data-parsley-validate class="form-horizontal form-label-left">
					<?php echo csrf_field(); ?>
					<?php echo method_field('PATCH'); ?>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Sekolah <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="text" value="<?php echo e($sekolah->nama_sekolah); ?>" name="nama_sekolah" required="required" class="form-control ">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alamat <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="alamat" name="alamat" value="<?php echo e($sekolah->alamat); ?>" required="required" class="form-control ">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No. Telp <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="no_telp" value="<?php echo e($sekolah->no_telp); ?>" name="no_telp" required="required" class="form-control ">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tingkatan Pendidikan <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select class="form-control" name="tingkatan_pendidikan">
								<option value="" selected></option>
								<?php $__currentLoopData = $tp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($key == $sekolah->tingkatan_pendidikan): ?>
										<option value="<?php echo e($key); ?>" selected><?php echo e($val); ?></option>
									<?php else: ?>
										<option value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\vin\resources\views/auths/sekolah/edit.blade.php ENDPATH**/ ?>