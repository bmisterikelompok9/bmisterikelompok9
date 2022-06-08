<?php $__env->startSection('head'); ?>
<div class="section">
    <div class="container">
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center">
                        <div class="author">
                            <img class="author-img center-block" src="<?php echo e(asset('assets/img/avatar/avatar-1.png')); ?>"
                                alt="">
                            <h1 class="text-uppercase"><?php echo e($user); ?></h1>
                            <ul class="author-social">
                                <li><a href="https://www.facebook.com/profile.php?id=100007787444809"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=6281246835129"><i
                                            class="fa fa-whatsapp"></i></a></li>
                                <li><a
                                        href="https://www.youtube.com/channel/UCSU_al9Rti8l4AQtgb4dZlg?view_as=subscriber"><i
                                            class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/adhiariyadi_/"><i
                                            class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('isi'); ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="post post-row">
    <a class="post-img" href="<?php echo e(route('blog.isi', $d->slug)); ?>"><img src="<?php echo e(asset( $d->gambar )); ?>" alt=""></a>
    <div class="post-body">
        <div class="post-category">
            <a href="<?php echo e(route('blog.category', $d->category->slug)); ?>"><?php echo e($d->category->name); ?></a>
        </div>
        <h3 class="post-title"><a href="<?php echo e(route('blog.isi', $d->slug)); ?>"><?php echo e($d->judul); ?></a></h3>
        <ul class="post-meta">
            <li><a href="<?php echo e(route('blog.users', Crypt::encrypt($d->users_id))); ?>"><?php echo e($d->users); ?></a></li>
            <li><?php echo e($d->created_at->format('l, H:i:s d M Y')); ?></li>
        </ul>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_frontend.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/user/author.blade.php ENDPATH**/ ?>