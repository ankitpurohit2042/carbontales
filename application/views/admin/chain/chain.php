<div id="layoutSidenav">
	<?php $this->load->view('/admin/templates/sidebar'); ?>
	<div id="layoutSidenav_content">
		<main>
			<div class="container-fluid">
				<h3 class="mt-4"><?php echo $title; ?></h3><br>
				<!-- <ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Dashboard</li>
				</ol> -->
				<?php echo validation_errors(); ?>
				<form action="" method="post" class="form-horizontal">
					<div class="form-group">
						<label for="without_chain">Without Chain</label>
						<input type="text" class="form-control" id="without_chain" name="without_chain" placeholder="Enter Without Chain" value="<?php if (!empty($data->without_chain)) : echo $data->without_chain;  ?> <?php endif; ?>"/>
					</div>

					<div class="form-group">
						<label for="with_platinum_chain">With Platinum Chain</label>
						<input class="form-control" name="with_platinum_chain" id="with_platinum_chain" type="text" placeholder="Enter With Platinum Chain" value="<?php if (!empty($data->with_platinum_chain)) : echo $data->with_platinum_chain;  ?> <?php endif; ?>"></input>
					</div>

					<div class="form-group">
						<label for="gold_price">Gold Price</label>
						<input class="form-control" name="gold_price" id="gold_price" type="text" placeholder="Enter With Gold Chain" value="<?php if (!empty($data->gold_price)) : echo $data->gold_price;  ?> <?php endif; ?>"></input>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-info pull-right">Save</button>
					</div>
				</form>
			</div>
		</main>
	</div>
	<script>
		//CKEDITOR.replace( 'editor' );
	</script>