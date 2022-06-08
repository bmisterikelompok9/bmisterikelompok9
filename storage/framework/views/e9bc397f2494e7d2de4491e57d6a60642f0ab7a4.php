	<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="index.html" class="logo"><img src="<?php echo e(asset('img/logo-alt.png')); ?>" alt=""></a>
						</div>
						<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
						<ul class="contact-social">
							<li><a href="https://www.facebook.com/adhiariyadi.me/" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://api.whatsapp.com/send?phone=6281246835129" class="social-whatsapp"><i class="fa fa-whatsapp"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCSU_al9Rti8l4AQtgb4dZlg?view_as=subscriber" class="social-youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://www.instagram.com/adhiariyadi_/" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Categories</h3>
						<div class="category-widget">
							<ul>
								<?php $__currentLoopData = $category_widget; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								  <li><a href="<?php echo e(route('blog.category', $hasil->slug)); ?>"><?php echo e($hasil->name); ?> <span><?php echo e($hasil->posts->count()); ?></span></a></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Tags</h3>
						<div class="tags-widget">
							<ul>
								<?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								  <li><a href="#"><?php echo e($hasil->name); ?></a></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Newsletter</h3>
						<div class="newsletter-widget">
							<form>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="<?php echo e(url('/')); ?>">Beranda</a></li>
						<li><a href="<?php echo e(route('blog.list')); ?>">List Post</a></li>
					</ul>
				</div>
        <div class="col-md-6 col-md-pull-6">
			<div class="footer-copyright">
				Copyright &copy;
				<?php if(date('Y') == '2019'): ?>
					<?php echo e(date('Y')); ?>

				<?php else: ?>
					2019 - <?php echo e(date('Y')); ?>

				<?php endif; ?>
				All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://github.com/adhiariyadi/" target="_blank">Adhi Ariyadi</a> | Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a>
                
			</div>
        </div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.stellar.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/main.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\laragon\www\blog\resources\views/template_frontend/footer.blade.php ENDPATH**/ ?>