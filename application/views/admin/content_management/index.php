<div id="layoutSidenav">
	<?php $this->load->view('/admin/templates/sidebar'); ?>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
				<h3 class="mt-4"><?php echo $title; ?></h3>
				<!-- <ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Dashboard</li>
				</ol> -->
					<?php $text=''; $cm_id=0; 
					if ($pageName == 'Home'){
						$text = $data->home_text;
						$cm_id = $data->content_id;
					}elseif ($pageName == 'About') {
						$text = $data->about_text;
						$cm_id = $data->content_id;
					} ?>
					<?php if($this->session->flashdata('msg')){ ?>
                        <div class="alert alert-success hide-out" role="alert">  
                            <?php echo $this->session->flashdata('msg');?>
                        </div>
                    <?php } ?>
					<form action = "" method = "post"  class="form-horizontal">
					<?php echo validation_errors(); ?>
						<div class="form-group">
							<div class="col-sm-10">
								<input type="hidden" name ="cm_id" class="form-control" id="cm_id" value="<?php echo $cm_id; ?>">
							</div>
							<textarea name="editor"><?php echo $text; ?></textarea>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-info pull-right">Save</button>
						</div>
					</form>
				</div>
			</main>
		</div>
<script>
CKEDITOR.replace( 'editor' );
</script>