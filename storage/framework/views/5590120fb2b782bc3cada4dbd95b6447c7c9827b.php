<div class="col-md-4">
  <!-- social widget -->
  <div class="aside-widget">
    <div class="section-title">
      <h2 class="title">Social Media</h2>
    </div>
    <div class="social-widget">
      <ul>
        <li>
          <a href="https://www.facebook.com/adhiariyadi.me/" class="social-facebook">
            <i class="fa fa-facebook"></i>
            <span>21.2 K<br>Followers</span>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/adhiariyadi_/" class="social-instagram">
            <i class="fa fa-instagram"></i>
            <span>45.2 K<br>Followers</span>
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/channel/UCSU_al9Rti8l4AQtgb4dZlg?view_as=subscriber" class="social-youtube">
            <i class="fa fa-youtube"></i>
            <span>10.3 M<br>Subscribe</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- /social widget -->

  <!-- category widget -->
  <div class="aside-widget">
    <div class="section-title">
      <h2 class="title">Categories</h2>
    </div>
    <div class="category-widget">
      <ul>
        <?php $__currentLoopData = $category_widget; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><a href="<?php echo e(route('blog.category', $hasil->slug)); ?>"><?php echo e($hasil->name); ?> <span><?php echo e($hasil->posts->count()); ?></span></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  </div>
  <!-- /category widget -->

  <!-- post widget -->
  <div class="aside-widget">
    <div class="section-title">
      <h2 class="title">POSTINGAN TERBARU</h2>
    </div>
    <!-- post -->
    <?php $__currentLoopData = $posts_widget; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="post post-widget">
        <a class="post-img" href="blog-post.html"><img src="<?php echo e(asset($data->gambar)); ?>" alt=""></a>
        <div class="post-body">
          <div class="post-category">
            <a href="<?php echo e(route('blog.category', $data->category->slug)); ?>"><?php echo e($data->category->name); ?></a>
          </div>
          <h3 class="post-title"><a href="<?php echo e(route('blog.isi', $data->slug)); ?>"><?php echo e($data->judul); ?></a></h3>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- /post -->
  </div>
  <!-- /post widget -->
</div>
<?php /**PATH C:\laragon\www\Blog-SEO-Laravel\resources\views/template_frontend/widget.blade.php ENDPATH**/ ?>