	<!-- ========================
      Footer
    ========================== -->
	<footer id="footer" class="footer footer-1">
	  <div class="footer-top">
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-12 col-md-12 col-lg-4 footer__widget footer__widget-about">
	          <div class="footer__widget-content">
	            <img src="<?= base_url(); ?>assets/images/favicon/gaffarindo.png" alt="logo" class="mb-30" height="70">
	          </div>
	        </div><!-- /.col-lg-4 -->
	        <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
	          <h6 class="footer__widget-title">Who We Are</h6>
	          <div class="footer__widget-content">
	            <nav>
	              <ul class="list-unstyled">
	                <li><a href="<?= base_url(); ?>company">About Us</a></li>
	                <!-- <li><a href="<?= base_url(); ?>home/project">Projects</a></li> -->
	                <li><a href="<?= base_url(); ?>home/contact">Contacts</a></li>
	              </ul>
	            </nav>
	          </div><!-- /.footer-widget-content -->
	        </div><!-- /.col-lg-2 -->
	        <div class="col-6 col-sm-6 col-md-3 col-lg-3 footer__widget footer__widget-nav">
	          <h6 class="footer__widget-title">Our Service</h6>
	          <div class="footer__widget-content">
	            <nav>
	              <ul class="list-unstyled">
	                <?php foreach ($service as $ser) { ?>
	                  <li><a href="<?= base_url(); ?>services/<?= $ser->Slug; ?>"><?= $ser->ServiceName; ?></a></li>
	                <?php } ?>
	              </ul>
	            </nav>
	          </div><!-- /.footer-widget-content -->
	        </div><!-- /.row -->
	      </div><!-- /.container -->
	    </div><!-- /.footer-top -->
	    <div class="container">
	      <div class="footer-bottom">
	        <div class="row">
	          <div class="col-sm-12 col-md-9 col-lg-9">
	            <div class="footer__copyright">
	              <!-- <nav>
	                <ul class="list-unstyled footer__copyright-links d-flex flex-wrap">
	                  <li><a href="#">Terms & Conditions </a></li>
	                  <li><a href="#">Privacy Policy</a></li>
	                  <li><a href="#">Sitemap</a></li>
	                </ul>
	              </nav> -->
	              <span> 2021 &copy; </span>
	              <a href="https://gaffarindo.com">PT. Gaffarindo Sukses Logistik</a>
	            </div><!-- /.Footer-copyright -->
	          </div><!-- /.col-lg-6 -->
	          <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center">
	            <div class="social__icons justify-content-end w-100">
	              <!--<a href="<?= $sosmed->Youtube; ?>" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>-->
	              <a href="<?= $sosmed->Facebook; ?>" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
	              <a href="<?= $sosmed->Twitter; ?>" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
	              <a href="<?= $sosmed->Instagram; ?>" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
	            </div><!-- /.social-icons -->
	          </div><!-- /.col-lg-6 -->
	        </div><!-- /.row -->
	      </div><!-- /.Footer-bottom -->
	    </div><!-- /.container -->
	</footer><!-- /.Footer -->
	<button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>
	</div><!-- /.wrapper -->

	<!-- GetButton.io widget -->
	<script type="text/javascript">
	  (function() {
	    var options = {
	      whatsapp: "<?= $sosmed->Whatsapp; ?>", // WhatsApp number
	      call_to_action: "Message us", // Call to action
	      position: "left", // Position may be 'right' or 'left'
	    };
	    var proto = document.location.protocol,
	      host = "getbutton.io",
	      url = proto + "//static." + host;
	    var s = document.createElement('script');
	    s.type = 'text/javascript';
	    s.async = true;
	    s.src = url + '/widget-send-button/js/init.js';
	    s.onload = function() {
	      WhWidgetSendButton.init(host, proto, options);
	    };
	    var x = document.getElementsByTagName('script')[0];
	    x.parentNode.insertBefore(s, x);
	  })();
	</script>
	<!-- /GetButton.io widget -->
	<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugins.js"></script>
	<script src="<?= base_url(); ?>assets/js/main.js"></script>
	</body>

	</html>