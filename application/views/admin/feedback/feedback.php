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
						    <label for="clientName">Client Name</label>
						  	<input type="name" class="form-control" id="clientName" name="clientName" placeholder="Enter Client Name"
						  	 value="<?php if(!empty($data->name)): echo $data->name;  ?> <?php endif; ?>">
						</div>
					   
					   	<div class="form-group">
    						<label for="feedbackArea">Client Feedback</label>
    						<textarea class="form-control" name="feedback" id="feedbackArea" rows="4"><?php if(!empty($data->feedback)): echo $data->feedback;  ?> <?php endif; ?></textarea>
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