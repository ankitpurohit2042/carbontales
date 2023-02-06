<div id="layoutSidenav">
    <?php $this->load->view('/admin/templates/sidebar'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h3 class="mt-4"><?php echo $title; ?></h3>
                <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger hide-out" role="alert">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                <?php } elseif ($this->session->flashdata('msg')) { ?>
                <div class="alert alert-success hide-out" role="alert">
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
                <?php } //echo "<pre>"; print_r($data);die; 
				?>
                <?php echo  form_open_multipart() ?>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                            value="<?php if (!empty($data['name'])) : echo $data['name'];  ?> <?php endif; ?>">
                        <?php echo form_error('name', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Product Code</label>
                        <input type="text" class="form-control" id="product_code" name="product_code"
                            placeholder="Enter Product Code"
                            value="<?php if (!empty($data['product_code'])) : echo $data['product_code'];  ?> <?php endif; ?>">
                        <?php echo form_error('product_code', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="feedbackArea">Product Description</label>
                    <textarea
                        name="description"><?php if (!empty($data['description'])) : echo $data['description'];  ?> <?php endif; ?></textarea>
                    <?php echo form_error('description', '<span class="text-danger">', '</span>'); ?>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="making_cost">Making Cost</label>
                        <input type="text" class="form-control" id="making_cost" name="making_cost" placeholder="Enter Making Cost"
                            value="<?php if (!empty($data['making_cost'])) : echo $data['making_cost'];  ?> <?php endif; ?>">
                        <?php echo form_error('making_cost', '<span class="text-danger">', '</span>'); ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="dimensions">Pendant Dimensions</label>
                        <input type="text" class="form-control" id="dimensions" name="dimensions"
                            placeholder="Enter Dimensions"
                            value="<?php if (!empty($data['dimensions'])) : echo $data['dimensions'];  ?> <?php endif; ?>">
                        <?php echo form_error('dimensions', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="diamond_one">Diamond One Cost</label>
                        <input type="text" class="form-control" id="diamond_one" name="diamond_one"
                            placeholder="Enter Diamond One"
                            value="<?php if (!empty($data['diamond_one'])) : echo $data['diamond_one'];  ?> <?php endif; ?>">
                        <?php echo form_error('diamond_one', '<span class="text-danger">', '</span>'); ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="diamond_two">Diamond Two Cost</label>
                        <input type="text" class="form-control" id="diamond_two" name="diamond_two"
                            placeholder="Enter Diamond Two"
                            value="<?php if (!empty($data['diamond_two'])) : echo $data['diamond_two'];  ?> <?php endif; ?>">
                        <?php echo form_error('diamond_two', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="diamond_one_weight">Diamond One Weight</label>
                        <input type="text" class="form-control" id="diamond_one_weight" name="diamond_one_weight"
                            placeholder="Enter Diamond Weight"
                            value="<?php if (!empty($data['diamond_one_weight'])) : echo $data['diamond_one_weight'];  ?> <?php endif; ?>">
                        <?php echo form_error('diamond_one_weight', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="diamond_two_weight">Diamond Two Weight</label>
                        <input type="text" class="form-control" id="diamond_two_weight" name="diamond_two_weight"
                            placeholder="Enter Diamond Weight"
                            value="<?php if (!empty($data['diamond_two_weight'])) : echo $data['diamond_two_weight'];  ?> <?php endif; ?>">
                        <?php echo form_error('diamond_two_weight', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <!-- 
					<div class="form-group col-md-6">
						<label for="diamonds">Diamonds</label>
						<input type="text" class="form-control" id="diamonds" name="diamonds" placeholder="Enter Diamonds" value="<?php if (!empty($data['diamonds'])) : echo $data['diamonds'];  ?> <?php endif; ?>">
						<?php echo form_error('diamonds', '<span class="text-danger">', '</span>'); ?>
					</div> -->
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="purity">Metal Purity</label>
                        <input type="text" class="form-control" id="purity" name="purity"
                            placeholder="Enter Metal Purity"
                            value="<?php if (!empty($data['purity'])) : echo $data['purity'];  ?> <?php endif; ?>">
                        <?php echo form_error('purity', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="metal">Metal Weight</label>
                        <input type="text" class="form-control" id="metal" name="metal" placeholder="Enter Metal Weight"
                            value="<?php if (!empty($data['metal'])) : echo $data['metal'];  ?> <?php endif; ?>">
                        <?php echo form_error('metal', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="active">Chain Length</label>
                        <select name="chain_length" class="form-control">
                            <option <?php if (isset($data['chain_length']) && $data['chain_length'] == "16mm") { ?>
                                selected="selected" <?php } ?> value="16mm">16mm</option>
                            <!-- <option <?php if (isset($data['chain_length']) && $data['chain_length'] == "0") { ?> selected="selected" <?php } ?> value="0" selected>No</option> -->
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="product_category">Product Category</label>
                        <select name="product_category" class="form-control">
                            <option
                                <?php if (isset($data['product_category']) && $data['product_category'] == "Pendant") { ?>
                                selected="selected" <?php } ?> value="Pendant" selected>Pendant</option>
                            <option
                                <?php if (isset($data['product_category']) && $data['product_category'] == "Ring") { ?>
                                selected="selected" <?php } ?> value="Ring">Ring</option>
                            <option
                                <?php if (isset($data['product_category']) && $data['product_category'] == "Bracelet") { ?>
                                selected="selected" <?php } ?> value="Bracelet">Bracelet</option>
                            <option
                                <?php if (isset($data['product_category']) && $data['product_category'] == "Bangle") { ?>
                                selected="selected" <?php } ?> value="Bangle">Bangle</option>
                            <option
                                <?php if (isset($data['product_category']) && $data['product_category'] == "Earrings") { ?>
                                selected="selected" <?php } ?> value="Earrings">Earrings</option>
                        </select>
                        <!-- <input type="text" class="form-control" id="product_category" name="diamond_setting" placeholder="Enter Diamond Setting" value="<?php if (!empty($data['diamond_setting'])) : echo $data['diamond_setting'];  ?> <?php endif; ?>"> -->
                        <?php echo form_error('diamond_setting', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <!-- <div class="form-group col-md-6">
						<label for="diamonds">Stone Weight</label>
						<input type="text" class="form-control" id="diamonds" name="diamonds" placeholder="Enter Diamonds" value="<?php if (!empty($data['diamonds'])) : echo $data['diamonds'];  ?> <?php endif; ?>">
						<?php echo form_error('diamonds', '<span class="text-danger">', '</span>'); ?>
					</div> -->
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="diamond_clarity">Diamond Clarity</label>
                        <input type="text" class="form-control" id="diamond_clarity" name="diamond_clarity"
                            placeholder="Enter Diamond Clarity"
                            value="<?php if (!empty($data['diamond_clarity'])) : echo $data['diamond_clarity'];  ?> <?php endif; ?>">
                        <?php echo form_error('diamond_clarity', '<span class="text-danger">', '</span>'); ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="diamond_color">Diamond Color</label>
                        <input type="text" class="form-control" id="diamond_color" name="diamond_color"
                            placeholder="Enter Diamond Color"
                            value="<?php if (!empty($data['diamond_color'])) : echo $data['diamond_color'];  ?> <?php endif; ?>">
                        <?php echo form_error('diamond_color', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="diamond_setting">Diamond Setting</label>
                        <select name="diamond_setting" class="form-control">
                            <option
                                <?php if (isset($data['diamond_setting']) && $data['diamond_setting'] == "Prong") { ?>
                                selected="selected" <?php } ?> value="Prong" selected>Prong</option>
                            <option
                                <?php if (isset($data['diamond_setting']) && $data['diamond_setting'] == "Plate Prong") { ?>
                                selected="selected" <?php } ?> value="Plate Prong">Plate Prong</option>
                            <option
                                <?php if (isset($data['diamond_setting']) && $data['diamond_setting'] == "Bezel") { ?>
                                selected="selected" <?php } ?> value="Bezel">Bezel</option>
                            <option
                                <?php if (isset($data['diamond_setting']) && $data['diamond_setting'] == "Channel") { ?>
                                selected="selected" <?php } ?> value="Channel">Channel</option>
                        </select>
                        <!-- <input type="text" class="form-control" id="diamond_setting" name="diamond_setting" placeholder="Enter Diamond Setting" value="<?php if (!empty($data['diamond_setting'])) : echo $data['diamond_setting'];  ?> <?php endif; ?>"> -->
                        <?php echo form_error('diamond_setting', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="diamond_shape">Diamond Shape</label>
                        <!-- <select name="diamond_shape" class="form-control">
                            <option <?php if (isset($data['diamond_shape']) && $data['diamond_shape'] == "Round") { ?>
                                selected="selected" <?php } ?> value="Round" selected>Round</option>
                            <option
                                <?php if (isset($data['diamond_shape']) && $data['diamond_shape'] == "Baguette") { ?>
                                selected="selected" <?php } ?> value="Baguette">Baguette</option>
                        </select> -->
                        <input type="text" class="form-control" id="diamond_shape" name="diamond_shape" placeholder="Enter Diamond Shape" value="<?php if (!empty($data['diamond_shape'])) : echo $data['diamond_shape'];  ?> <?php endif; ?>">
                        <?php echo form_error('diamond_shape', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <!-- <div class="form-group col-md-6">
						<label for="collection">Collection</label>
						<input type="text" class="form-control" id="collection" name="collection" placeholder="Enter Collection" value="<?php if (!empty($data['collection'])) : echo $data['collection'];  ?> <?php endif; ?>">
						<?php echo form_error('collection', '<span class="text-danger">', '</span>'); ?>
					</div> -->
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="no_of_diamonds">Total No. of Diamonds</label>
                        <input type="text" class="form-control" id="no_of_diamonds" name="no_of_diamonds"
                            placeholder="Enter No. of Diamonds"
                            value="<?php if (!empty($data['no_of_diamonds'])) : echo $data['no_of_diamonds'];  ?> <?php endif; ?>">
                        <?php echo form_error('no_of_diamonds', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="occasion">Occasion</label>
                        <select name="occasion" class="form-control">
                            <option <?php if (isset($data['occasion']) && $data['occasion'] == "Every Day Wear") { ?>
                                selected="selected" <?php } ?> value="Every Day Wear" selected>Every Day Wear</option>
                            <!-- <option <?php if (isset($data['occasion']) && $data['occasion'] == "Baguette") { ?> selected="selected" <?php } ?> value="Baguette">Baguette</option> -->
                        </select>

                        <!-- <input type="text" class="form-control" id="occasion" name="occasion" placeholder="Enter occasion" value="<?php if (!empty($data['occasion'])) : echo $data['occasion'];  ?> <?php endif; ?>"> -->
                        <?php echo form_error('occasion', '<span class="text-danger">', '</span>'); ?>
                    </div>

                </div>


                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="active">Product is Custom</label>
                        <select name="isCustom" class="form-control">
                            <option <?php if (isset($data['is_custom']) && $data['is_custom'] == "0") { ?>
                                selected="selected" <?php } ?> value="0">No</option>
                            <option <?php if (isset($data['is_custom']) && $data['is_custom'] == "1") { ?>
                                selected="selected" <?php } ?> value="1">Yes</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="active">Product is active</label>
                        <select name="isActive" class="form-control">
                            <option <?php if (isset($data['is_active']) && $data['is_active'] == "1") { ?>
                                selected="selected" <?php } ?> value="1">Yes</option>
                            <option <?php if (isset($data['is_active']) && $data['is_active'] == "0") { ?>
                                selected="selected" <?php } ?> value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="stone_wt">Stone Weight</label>
                        <input type="text" class="form-control" id="stone_wt" name="stone_wt"
                            placeholder="Enter Stone Weight"
                            value="<?php if (!empty($data['stone_wt'])) : echo $data['stone_wt'];  ?> <?php endif; ?>">
                        <?php echo form_error('stone_wt', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="stone_cost">Stone Cost</label>
                        <input type="text" class="form-control" id="stone_cost" name="stone_cost"
                            placeholder="Enter Stone Cost"
                            value="<?php if (!empty($data['stone_cost'])) : echo $data['stone_cost'];  ?> <?php endif; ?>">
                        <?php echo form_error('stone_cost', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="stone_type">Stone Type</label>
                        <input type="text" class="form-control" id="stone_type" name="stone_type"
                            placeholder="Enter Stone Type"
                            value="<?php if (!empty($data['stone_type'])) : echo $data['stone_type'];  ?> <?php endif; ?>">
                        <?php echo form_error('stone_type', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>
                <?php if (!empty($data['image_details']) && isset($data['image_details'])) ?>
                <label for="feedbackArea">Existing File</label><br>
                <?php for ($i = 0; $i < count($data['image_details']); $i++) { ?>
                <div id="remove_<?= $data['image_details'][$i]->image_id ?>" class="form-group left"
                    style="display: inline; margin-right: 1rem;">
                    <img style="border: 1px solid #f2ccff;" width="100" height="100"
                        src="<?php if (!empty($data['image_details'][$i]->file_name)) : echo base_url() . '/assets/upload/product/' . $data['image_details'][$i]->file_name;  ?> <?php endif; ?>">
                    <span
                        onclick="deleteImage('<?= $data['image_details'][$i]->image_id ?>', '<?= $data['image_details'][$i]->file_name ?>')">
                        <i style="cursor: pointer;" class="far fa-trash-alt"></i>
                    </span>
                </div>
                <input type="hidden" name="existingImage[]"
                    value="<?php if (!empty($data['image_details'][$i]->full_path)) : echo $data['image_details'][$i]->full_path;  ?> <?php endif; ?>">
                <?php } ?>
                <div class="form-group" style="margin-top: 1rem;">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" multiple="multiple" name="profile_image[]"
                            id="profile_image">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </main>
    </div>
    <script>
    // $(document).ready(function() {
    function deleteImage(id, fileName) {
        var result = confirm("Are you sure to delete?");
        if (result) {
            $.post("<?php echo base_url('admin/deleteProductImage'); ?>", {
                id: id,
                fileName: fileName
            }, function(resp) {
                if (resp == 'ok') {
                    $('#remove_' + id).remove();
                    alert('The image has been removed from the gallery');
                } else {
                    alert('Some problem occurred, please try again.');
                }
            });
        }
    }


    CKEDITOR.replace('description');
    // });
    </script>