	<!-- FOOTER -->
	<footer id="footer">
	    <!-- container -->
	    <div class="container">
	        <!-- row -->
	        <div class="row">
	            <div class="col-md-3">
	                <div class="footer-widget">
	                    <div class="footer-logo">
	                        <a href="{{ route('home') }}" class="logo"><img src="{{ asset('img/logo-foot.png') }}"
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
	                            @foreach ($category_widget as $hasil)
	                            <li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }}
	                                    <span>{{ $hasil->posts->count() }}</span></a></li>
	                            @endforeach
	                        </ul>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-3">
	                <div class="footer-widget">
	                    <h3 class="footer-title">Tags</h3>
	                    <div class="tags-widget">
	                        <ul>
	                            @foreach ($tag as $hasil)
	                            <li><a href="#">{{ $hasil->name }}</a></li>
	                            @endforeach
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
	                    <li><a href="{{ url('/') }}">Beranda</a></li>
	                    <li><a href="{{ route('blog.list') }}">List Post</a></li>
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
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

	</body>

	</html>