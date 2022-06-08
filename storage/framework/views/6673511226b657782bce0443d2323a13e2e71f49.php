<?php $__env->startSection('head'); ?>
<div class="section-row">
    <div id="post-header" class="page-header">
        <div class="page-header-bg" style="background-image: url('<?php echo e(asset($data->gambar)); ?>');" data-stellar-background-ratio="0.5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="post-category">
                        <a href="<?php echo e(route('blog.category', $data->category->slug)); ?>"><?php echo e($data->category->name); ?></a>
                    </div>
                    <h1><?php echo e($data->judul); ?></h1>
                    <ul class="post-meta">
                        <li><a href="<?php echo e(route('blog.users', Crypt::encrypt($data->users_id))); ?>"><?php echo e($data->users->name); ?></a></li>
                        <li><?php echo e($data->created_at->format('l, H:i:s d M Y')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('isi'); ?>
<div class="section-row">
    <?php echo $data->content; ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_frontend.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Blog-SEO-Laravel\resources\views/user/isi_post.blade.php ENDPATH**/ ?>