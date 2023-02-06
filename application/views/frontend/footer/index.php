<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-6 fh5co-widget">
					<h3>Carbontales.</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="<?php echo site_url('about') ?>">About</a></li>
						<li><a href="<?php echo site_url('contact') ?>">Contact</a></li>
						<li><a href="#">Return and Exchange</a></li>
					</ul>
				</div>
					
				<div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="<?php echo site_url('inside-box') ?>">What's inside your box</a></li>
						<li><a href="<?php echo site_url('gifting') ?>">Gifting made easy</a></li>
						<li><a href="<?php echo site_url('product') ?>">Shop</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2021 All Rights Reserved.</small> 
						<small class="block">Developed by <a href="https://www.linkedin.com/in/vishal-kushwah/" target="_blank">Vishal Kushwah</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>

<!-- 
<div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div> -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/frontend/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?= base_url() ?>assets/frontend/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url() ?>assets/frontend/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?= base_url() ?>assets/frontend/js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="<?= base_url() ?>assets/frontend/js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="<?= base_url() ?>assets/frontend/js/jquery.countTo.js"></script>
<!-- Flexslider -->
<script src="<?= base_url() ?>assets/frontend/js/jquery.flexslider-min.js"></script>
<!-- Main -->
<script src="<?= base_url() ?>assets/frontend/js/main.js"></script>

<!-- <script src="js/jquery-3.2.1.min.js"></script> -->
<script src="<?= base_url() ?>assets/frontend/css/bootstrap4/popper.js"></script>
<script src="<?= base_url() ?>assets/frontend/plugins/Isotope/isotope.pkgd.min.js"></script>
<!-- <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script> -->
<script src="<?= base_url() ?>assets/frontend/plugins/easing/easing.js"></script>
<script src="<?= base_url() ?>assets/frontend/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="<?= base_url() ?>assets/js/single_custom.js"></script>
<script src="<?= base_url() ?>assets/frontend/js/product.js"></script>
<?php if($page == 'product') { ?>
	<!-- <script type="text/javascript" src="<?= base_url() ?>assets/frontend/js/zoom/xzoom.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/frontend/js/fancybox/source/jquery.fancybox.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/frontend/js/magnific-popup/js/magnific-popup.js"></script> -->
<?php } ?>
<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="<?= base_url() ?>assets/whatsapp/whatsapp.js"></script>
<script type="text/javascript">
  // $(document).ready(function(){
  //   $("html, body").animate({ scrollTop: 200 }, 2000);
  // });
  setTimeout(function() {

    $(function() {
      $('#WAButton').floatingWhatsApp({
        phone: '+91 98984 65725', //WhatsApp Business phone number International format-
        //Get it with Toky at https://toky.co/en/features/whatsapp.
        headerTitle: 'Chat with us on WhatsApp!', //Popup Title
        popupMessage: 'Hello, how can we help you?', //Popup Message
        showPopup: true, //Enables popup display
        buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
        //headerColor: 'crimson', //Custom header color
        //backgroundColor: 'crimson', //Custom background button color
        position: "right"
      });
    });



  }, 2000);

  $(function() {
    $(".hide-out").hide(8000);
  });
</script>
</div>
</body>

</html>