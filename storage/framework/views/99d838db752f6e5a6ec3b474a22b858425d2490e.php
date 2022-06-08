<?php $__env->startSection('judul', 'Edit Post'); ?>
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

  <form action="<?php echo e(route('post.update', $post->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('patch'); ?>
    <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" value="<?php echo e($post->judul); ?>" name="judul" autocomplete="off">
    </div>
    <div class="form-group">
      <label>Kategori</label>
      <select class="custom-select" name="category_id">
        <option value="" holder>Pilih Kategori</option>
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($d->id); ?>"
            <?php if($post->category_id == $d->id): ?>
              selected
            <?php endif; ?>
          ><?php echo e($d->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
    <div class="form-group">
      <label>Pilih Tags</label>
      <select class="form-control select2" multiple="" name="tags[]">
        <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($d->id); ?>"
            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($d->id == $value->id): ?>
                selected
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          ><?php echo e($d->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
    <div class="form-group">
      <label>Content</label>
      <textarea class="summernote" name="content"><?php echo e($post->content); ?></textarea>
    </div>
    <div class="form-group">
      <label>Thumbnail</label>
      <input type="file" class="form-control" name="gambar">
    </div>

    <div class="form-group">
      <button class="btn btn-primary btn-block">Update Post</button>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/post/edit.blade.php ENDPATH**/ ?>