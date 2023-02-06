<div id="layoutSidenav">
	<?php $this->load->view('/admin/templates/sidebar'); ?>
	<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
				<h3 class="mt-4"><?php echo $title; ?></h3>
					<?php if($this->session->flashdata('error')){ ?>
                        <div class="alert alert-danger hide-out" role="alert">  
                            <?php echo $this->session->flashdata('error');?>
                        </div>
                    <?php }elseif ($this->session->flashdata('msg')) { ?>
                    	<div class="alert alert-success hide-out" role="alert">  
                            <?php echo $this->session->flashdata('msg');?>
                        </div>
                    <?php } ?>
					<?php echo  form_open_multipart()?>

					<div class="form-row">
					<div class="form-group col-md-6">
					    <label for="name">Name</label>
					  	<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
					  	 value="<?php if(!empty($data->name)): echo $data->name;  ?> <?php endif; ?>">
					</div>
					<div class="form-group col-md-6">
					    <label for="product_code">Product Code</label>
					  	<input type="text" class="form-control" id="product_code" name="product_code" placeholder="Enter Product Code"
					  	 value="<?php if(!empty($data->product_code)): echo $data->product_code;  ?> <?php endif; ?>">
					</div>
					</div>

					<div class="form-row">
					<div class="form-group col-md-6">
					    <label for="price">Price</label>
					  	<input type="text" class="form-control" id="price" name="price" placeholder="Enter Price"
					  	 value="<?php if(!empty($data->price)): echo $data->price;  ?> <?php endif; ?>">
					</div>
					<div class="form-group col-md-6">
					    <label for="diamond_weight">Diamond Weight</label>
					  	<input type="text" class="form-control" id="diamond_weight" name="diamond_weight" placeholder="Enter Diamond Weight"
					  	 value="<?php if(!empty($data->diamond_weight)): echo $data->diamond_weight;  ?> <?php endif; ?>">
					</div>
				</div>
				
				<div class="form-row">
						<div class="form-group col-md-6">
							<label for="gold_weight">Gold Weight</label>
							  <input type="text" class="form-control" id="gold_weight" name="gold_weight" placeholder="Enter Gold Weight"
							  value="<?php if(!empty($data->gold_weight)): echo $data->gold_weight;  ?> <?php endif; ?>">
							
						</div>
						<div class="form-group col-md-6">
						<label for="active">Product is Custom</label>
						<select name="is_custom" class="form-control">
							<option <?php if (isset($data->is_custom) && $data->is_custom == "1") { ?> selected="selected" <?php } ?> value="1">Yes</option>
							<option <?php if (isset($data->is_custom) && $data->is_custom == "0") { ?> selected="selected" <?php } ?> value="0" selected>No</option>
						</select>
					</div>
					</div>

					<?php if (!empty($data->file_name)) { ?>
						
					<div class="form-group">
						<label for="feedbackArea">Existing File</label><br>
						<img width="100" height="100" src="<?php if(!empty($data->file_name)): echo base_url().'/assets/upload/pendant/'.$data->file_name;  ?> <?php endif; ?>">
					</div>
					<?php } ?>
					<input type="hidden" name="deleteImage" value="<?php if(!empty($data->full_path)): echo $data->full_path;  ?> <?php endif; ?>">
					<div class="form-group">
					  <div class="custom-file">
					    <input type="file" class="custom-file-input" name="profile_image" id="profile_image">
					    <label class="custom-file-label">Choose file</label>
					  </div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info pull-right">Save</button> 
					</div>					
					<?php echo form_close();?>
				</div>
			</main>
		</div>
