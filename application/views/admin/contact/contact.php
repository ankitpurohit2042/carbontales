<div id="layoutSidenav">
	<?php $this->load->view('/admin/templates/sidebar'); ?>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
				<h3 class="mt-4"><?php echo $title; ?></h3><br>
				
					<?php if($this->session->flashdata('error')){ ?>
                        <div class="alert alert-danger hide-out" role="alert">  
                            <?php echo $this->session->flashdata('error');?>
                        </div>
                    <?php }elseif ($this->session->flashdata('msg')) { ?>
                    	<div class="alert alert-success hide-out" role="alert">  
                            <?php echo $this->session->flashdata('msg');?>
                        </div>
                    <?php } ?>
                    <?php echo validation_errors(); ?>
					<div class="col-md-6">
						<h4>Name</h4>
						<div class="form-group">
							<div class="panel-body"><?php if(!empty($data->name)): echo $data->name ?><?php endif; ?></div>						  		
						</div>

						<h4>Email</h4>
						<div class="form-group">
							<div class="panel-body"><?php if(!empty($data->email)): echo $data->email; ?><?php endif; ?></div>						  		
						</div>

						<h4>Query</h4>
						<div class="form-group">
							<div class="panel-body"><?php if(!empty($data->query)): echo $data->query; ?><?php endif; ?></div>						  		
						</div>						
  						
						<div class="form-group">						
							<!-- <button class="btn btn-info pull-right">Reply</button> -->
							<button class="btn btn-info pull-right" data-toggle="collapse" data-target="#reply">Reply</button>
						</div>

						<form action="" method="post">													
							<div id="reply" class="collapse form-group">
								<div class="form-group">
								    <label for="subject">Subject</label>
								  	<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
								</div>
								<div class="form-group">
		    						<label for="message">Message</label>
		    						<textarea class="form-control" name="message" id="message" rows="4"></textarea>		
								</div>
	    						<div class="form-group">						
									<button type="submit" class="btn btn-info pull-right">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</main>
		</div>
<script>
//CKEDITOR.replace( 'editor' );
</script>