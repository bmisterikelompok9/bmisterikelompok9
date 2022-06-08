<?php echo $__env->make('template_frontend.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('head'); ?>

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<div id="hot-post" class="row hot-post">
			<div class="col-md-8 hot-post-left">
				<?php echo $__env->yieldContent('isi'); ?>
			</div>
			<?php echo $__env->make('template_frontend.widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
<?php echo $__env->make('template_frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\blog\resources\views/template_frontend/content.blade.php ENDPATH**/ ?>