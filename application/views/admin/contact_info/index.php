<div id="layoutSidenav">
	<?php $this->load->view('/admin/templates/sidebar'); ?>
	<div id="layoutSidenav_content">
		<main>
			<div class="container-fluid">
			<h3 class="mt-4"><?php echo $title; ?></h3>
			<!-- <ol class="breadcrumb mb-4">
			<li class="breadcrumb-item active">Dashboard</li>
			</ol> -->
				<?php if($this->session->flashdata('msg')){ ?>
	                <div class="alert alert-success hide-out" role="alert">  
	                    <?php echo $this->session->flashdata('msg');?>
	                </div>
	            <?php } ?>
				<form action = "" method = "post"  class="form-horizontal">
				<?php echo validation_errors(); ?>
					<div class="form-group">
					    <label for="email">Email</label>
					  	<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"
					  	 value="<?php if(!empty($data[0]->email)): echo $data[0]->email;  ?> <?php endif; ?>">
					</div>

					<div class="form-group">
					    <label for="mobile">Mobile number</label>
					  	<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Email"					  	
					  	 value="<?php if(!empty($data[0]->mobile)): echo $data[0]->mobile;  ?> <?php endif; ?>">
					  	 <!-- <input type="number" id="quantity" name="quantity" min="1" max="5"> -->
					</div>
				   	<input type="hidden" name="ci_id" value="<?php if(!empty($data[0]->id)): echo $data[0]->id; else: echo '0'; ?> <?php endif; ?>">
				   	<div class="form-group">
						<label for="address">Address</label>
						<textarea class="form-control" name="address" id="address" rows="4"><?php if(!empty($data[0]->address)): echo $data[0]->address;  ?> <?php endif; ?></textarea>
						</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Save</button>
					</div>
				</form>
			</div>
		</main>
	</div>