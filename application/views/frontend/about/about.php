<div id="fh5co-about">
	<div class="container">
		<div class="about-content">
			<div class="row animate-box">
				<div class="col-md-6">
					<?php foreach ($about_us as $row) { ?>
						<div class="desc">
							<h3><?php echo $row->heading; ?></h3>
							<?php echo $row->description; ?>
						</div>
					<?php }  ?>
				</div>
				<div class="col-md-6">
					<img class="img-responsive" src="<?= base_url() ?>assets/frontend/images/img_bg_1.jpg" alt="about">
				</div>
			</div>
		</div>
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<span>Productive Staff</span>
				<h2>Meet Our Team</h2>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-staff">
					<img src="<?= base_url() ?>assets/frontend/images/person1.jpg" alt="Free HTML5 Templates by gettemplates.co">
					<h3>Jean Smith</h3>
					<strong class="role">Chief Executive Officer</strong>
					<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
						<li><a href="#"><i class="icon-github"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-staff">
					<img src="<?= base_url() ?>assets/frontend/images/person2.jpg" alt="Free HTML5 Templates by gettemplates.co">
					<h3>Hush Raven</h3>
					<strong class="role">Co-Owner</strong>
					<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
						<li><a href="#"><i class="icon-github"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-staff">
					<img src="<?= base_url() ?>assets/frontend/images/person3.jpg" alt="Free HTML5 Templates by gettemplates.co">
					<h3>Alex King</h3>
					<strong class="role">Co-Owner</strong>
					<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
						<li><a href="#"><i class="icon-github"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>