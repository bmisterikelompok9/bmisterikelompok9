<?php $__env->startSection('judul', 'User'); ?>
<?php $__env->startSection('content'); ?>
  <?php if(Session::has('success')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(Session('success')); ?>

    </div>
  <?php endif; ?>

  <a href="<?php echo e(route('user.create')); ?>" class="btn btn-primary btn-sm">Tambah User</a><br><br>
  <table class="table table-striped table-hover table-sm table-bordered">
    <tr>
      <th>No</th>
      <th>Nama User</th>
      <th>Email</th>
      <th>Type</th>
      <th>Action</th>
    </tr>
    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($result + $user->firstitem()); ?></td>
        <td><?php echo e($d->name); ?></td>
        <td><?php echo e($d->email); ?></td>
        <td>
          <?php if( $d->tipe ): ?>
            <span class="badge badge-info">Administrator</span>
          <?php else: ?>
            <span class="badge badge-warning">Author</span>
          <?php endif; ?>
        </td>
        <td>
          <form action="<?php echo e(route('user.destroy', $d->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <a href="<?php echo e(route('user.edit', $d->id)); ?>" class="btn btn-success btn-sm">Edit</a>
            <button type="submit" class="btn btn-danger btn-sm" name="button">Delete</button>
          </form>
        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
  <?php echo e($user->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Blog-SEO-Laravel\resources\views/admin/user/index.blade.php ENDPATH**/ ?>