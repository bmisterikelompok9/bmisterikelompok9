	<!-- FOOTER -->
	<footer id="footer">
	    <!-- container -->
	    <div class="container">
	        <!-- row -->
	        <div class="row">
	            <div class="col-md-3">
	                <div class="footer-widget">
	                    <div class="footer-logo">
	                        <a href="<?php echo e(route('home')); ?>" class="logo"><img src="<?php echo e(asset('img/logo-foot.png')); ?>"
	                                alt=""></a>
	                    </div>
	                    <p>Mampir Dulu Ke Media Sosial Kita B-Misteri</p>
	                    <ul class="contact-social">
	                        <li><a href="" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
	                        <li><a href="" class="social-whatsapp"><i class="fa fa-whatsapp"></i></a></li>
	                        <li><a href="" class="social-youtube"><i class="fa fa-youtube"></i></a></li>
	                        <li><a href="" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
	                    </ul>
	                </div>
	            </div>
	            <div class="col-md-3">
	                <div class="footer-widget">
	                    <h3 class="footer-title">Categories</h3>
	                    <div class="category-widget">
	                        <ul>
	                            <?php $__currentLoopData = $category_widget; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                            <li><a href="<?php echo e(route('blog.category', $hasil->slug)); ?>"><?php echo e($hasil->name); ?>

	                                    <span><?php echo e($hasil->posts->count()); ?></span></a></li>
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
	                    <h3 class="footer-title">E-Mail</h3>
	                    <div class="newsletter-widget">
	                        <form>
	                            <p>Kirim cerita kalian lewat email kami, admin akan posting di website B-Misteri</p>
	                            <i class="bi bi-envelope-fill">bmisteri.mod@gmail.com</i>
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

	</html><?php /**PATH C:\xampp\htdocs\blog\resources\views/template_frontend/footer.blade.php ENDPATH**/ ?>