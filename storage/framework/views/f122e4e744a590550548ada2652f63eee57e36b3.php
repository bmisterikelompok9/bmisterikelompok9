<?php $__env->startSection('judul', 'Tambah User'); ?>
<?php $__env->startSection('content'); ?>
  <?php if(count($errors)>0): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="alert alert-danger" role="alert">
        <?php echo e($error); ?>

      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>

  <?php if(Session::has('success')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(Session('success')); ?>

    </div>
  <?php endif; ?>

  <form action="<?php echo e(route('user.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label>Nama User</label>
      <input type="text" class="form-control" name="name" autocomplete="off">
    </div>
    <div class="form-group">
      <label>Email User</label>
      <input type="email" class="form-control" name="email" autocomplete="off">
    </div>
    <div class="form-group">
      <label>Tipe User</label>
      <select class="custom-select" name="tipe">
        <option value="" holder>Pilih Tipe User</option>
        <option value="1" holder>Administrator</option>
        <option value="0" holder>Author</option>
      </select>
    </div>
    <div class="form-group">
      <label>Password User</label>
      <input type="password" class="form-control" name="password" autocomplete="off">
    </div>

    <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan User</button>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/user/create.blade.php ENDPATH**/ ?>