<?php $__env->startSection('judul', 'Tambah Category'); ?>
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

  <form action="<?php echo e(route('category.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label>Nama Kategory</label>
      <input type="text" class="form-control" name="name" autocomplete="off">
    </div>

    <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Kategory</button>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Blog-SEO-Laravel\resources\views/admin/category/create.blade.php ENDPATH**/ ?>