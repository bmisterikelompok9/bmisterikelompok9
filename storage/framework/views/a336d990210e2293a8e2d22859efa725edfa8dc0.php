<?php $__env->startSection('isi'); ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="post post-row">
            <a class="post-img" href="<?php echo e(route('blog.isi', $d->slug)); ?>"><img src="<?php echo e(asset($d->gambar)); ?>" alt=""></a>
            <div class="post-body">
                <div class="post-category">
                    <a href="<?php echo e(route('blog.category', $d->category->slug)); ?>"><?php echo e($d->category->name); ?></a>
                </div>
                <h3 class="post-title"><a href="<?php echo e(route('blog.isi', $d->slug)); ?>"><?php echo e($d->judul); ?></a></h3>
                <ul class="post-meta">
                    <li><a href="<?php echo e(route('blog.users', Crypt::encrypt($d->users_id))); ?>"><?php echo e($d->users->name); ?></a></li>
                    <li><?php echo e($d->created_at->format('l, H:i:s d M Y')); ?></li>
                </ul>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <center><?php echo e($data->links()); ?></center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_frontend.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Blog-SEO-Laravel\resources\views/user/list_blog.blade.php ENDPATH**/ ?>