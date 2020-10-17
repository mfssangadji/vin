<?php $__env->startSection('title', 'Ubah Siswa'); ?>
<?php $__env->startSection('content'); ?>
	    <div class="x_panel">
			<div class="x_title">
				<h2>Form Edit <small><i>Siswa</i></small></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" method="post" action="<?php echo e(route('siswa').'/'.$siswa->id); ?>" data-parsley-validate class="form-horizontal form-label-left">
					<?php echo csrf_field(); ?>
					<?php echo method_field('PATCH'); ?>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Sekolah <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select class="form-control select2" multiple="multiple" name="sekolah_id">
								<?php $__currentLoopData = $sekolah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sekolah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($sekolah->id == $siswa->sekolah_id): ?>
										<option value="<?php echo e($sekolah->id); ?>" selected><?php echo e($sekolah->nama_sekolah); ?></option>
									<?php else: ?>
										<option value="<?php echo e($sekolah->id); ?>"><?php echo e($sekolah->nama_sekolah); ?></option>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">NIS <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="text" name="nis" value="<?php echo e($siswa->nis); ?>" required="required" class="form-control ">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Lengkap <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="nama_lengkap" value="<?php echo e($siswa->nama_lengkap); ?>" name="nama_lengkap" required="required" class="form-control ">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Jenis Kelamin <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select name="jenis_kelamin" class="form-control">
								<option value="" selected></option>
								<?php $__currentLoopData = $jk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($key == $siswa->jenis_kelamin): ?>
										<option value="<?php echo e($key); ?>" selected><?php echo e($val); ?></option>
									<?php else: ?>
										<option value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alamat <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="alamat" value="<?php echo e($siswa->alamat); ?>" name="alamat" required="required" class="form-control ">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No. Telp <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="no_telp" value="<?php echo e($siswa->no_telp); ?>" name="no_telp" required="required" class="form-control ">
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
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\vin\resources\views/auths/siswa/edit.blade.php ENDPATH**/ ?>