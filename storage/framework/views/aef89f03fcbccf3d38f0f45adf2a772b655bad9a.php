<?php $__env->startSection('isi'); ?>
	<!-- row -->
	<div class="row">
		<div class="col-md-12">
			<div class="section-title">
				<h2 class="title">Beranda</h2>
			</div>
		</div>
		<!-- post -->
		<?php
			$i = 1;
		?>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-6">
				<div class="post">
					<a class="post-img" href="<?php echo e(route('blog.isi', $d->slug)); ?>"><img src="<?php echo e(asset( $d->gambar )); ?>" height="250" alt=""></a>
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
			</div>
		<?php if($i % 2 == 0): ?>
			<div class="clearfix visible-md visible-lg"></div>
		<?php endif; ?>
		<?php
			$i++;
		?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<!-- /row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_frontend.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Blog-SEO-Laravel\resources\views/user/home.blade.php ENDPATH**/ ?>