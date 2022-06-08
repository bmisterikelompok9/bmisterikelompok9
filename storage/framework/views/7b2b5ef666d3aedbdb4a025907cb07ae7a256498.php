<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy;
    <?php if(date('Y') == '2019'): ?>
      <?php echo e(date('Y')); ?>

    <?php else: ?>
      2019 - <?php echo e(date('Y')); ?>

    <?php endif; ?>
    <div class="bullet"></div> Design By <a href="https://github.com/adhiariyadi/">Adhi Ariyadi</a>
  </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="<?php echo e(asset('assets/modules/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/popper.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/tooltip.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/stisla.js')); ?>"></script>

<!-- JS Libraies -->
<script src="<?php echo e(asset('assets/modules/select2/dist/js/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/summernote/summernote-bs4.js')); ?>"></script>

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\Blog-SEO-Laravel\resources\views/template_backend/footer.blade.php ENDPATH**/ ?>