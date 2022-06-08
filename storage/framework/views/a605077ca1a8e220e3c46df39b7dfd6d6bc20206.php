<?php $__env->startSection('judul', 'Post'); ?>
<?php $__env->startSection('content'); ?>
  <?php if(Session::has('success')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(Session('success')); ?>

    </div>
  <?php endif; ?>

  <a href="<?php echo e(route('post.create')); ?>" class="btn btn-primary btn-sm">Tambah Post</a><br><br>
  <table class="table table-striped table-hover table-sm table-bordered">
    <tr>
      <th>No</th>
      <th>Nama Post</th>
      <th>Kategori</th>
      <th>Daftar Tags</th>
      <th>Creator</th>
      <th>Thumbnail</th>
      <th>Action</th>
    </tr>
    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($result + $post->firstitem()); ?></td>
        <td><?php echo e($d->judul); ?></td>
        <td><?php echo e($d->category->name); ?></td>
        <td>
          <?php $__currentLoopData = $d->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h6><span class="badge badge-info"><?php echo e($tag->name); ?></span></h6>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </td>
        <td><?php echo e($d->users->name); ?></td>
        <td>
          <img src="<?php echo e(asset( $d->gambar )); ?>" class="img-fluid" width="100" alt="">
        </td>
        <td>
          <form action="<?php echo e(route('post.destroy', $d->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <a href="<?php echo e(route('post.edit', $d->id)); ?>" class="btn btn-success btn-sm">Edit</a>
            <button type="submit" class="btn btn-danger btn-sm" name="button">Delete</button>
          </form>
        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
  <?php echo e($post->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Blog-SEO-Laravel\resources\views/admin/post/index.blade.php ENDPATH**/ ?>