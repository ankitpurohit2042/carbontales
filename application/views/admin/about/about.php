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
					<form action = "" method = "post"  class="form-horizontal">
						<div class="form-group">
						    <label for="heading">Heading Text</label>
						  	<input type="heading" class="form-control" id="heading" name="heading" placeholder="Enter Heading Text"
						  	 value="<?php if(!empty($data->heading)): echo $data->heading;  ?> <?php endif; ?>">
						</div>
					   
					   	<div class="form-group">
    						<label for="description">Client Feedback</label>
    						<textarea class="form-control" name="description" id="description" rows="4"><?php if(!empty($data->description)): echo $data->description;  ?> <?php endif; ?></textarea>
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