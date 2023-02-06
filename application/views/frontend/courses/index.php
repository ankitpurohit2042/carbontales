<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/frontend/images/bg_2.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Our Courses</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url() ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Courses <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<?php foreach ($data as $row) { ?>
				<div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(<?= base_url() ?>assets/frontend/images/<?= $row->image ?>);"></div>
					<div class="text bg-light p-4">
						<h3><a href="#"><?= $row->course_name ?></a></h3>
						<p class="subheading"><span>Class time:</span> <?= $row->course_time ?></p>
						<p><?= $row->description ?></p>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>