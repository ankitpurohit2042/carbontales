<div id="layoutSidenav">
    <?php $this->load->view('/admin/templates/sidebar'); ?>
    <div id="layoutSidenav_content">
        <main><?php //echo "<pre>"; print_r($data);die; 
				?>
            <div class="container-fluid">
                <h3 class="mt-4"><?php echo $title; ?></h3><br>
                <div class="col-md-8">
                    <h4>Product Name</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['name'])) : echo $data['name'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Product Description</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['description'])) : echo $data['description'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Product Price</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['price'])) : echo $data['price'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Purity</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['purity'])) : echo $data['purity'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Product Type</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['product'])) : echo $data['product'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Diamond Weight</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['diamond_weight'])) : echo $data['diamond_weight'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Height</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['height'])) : echo $data['height'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Diamonds</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['diamonds'])) : echo $data['diamonds'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Diamond Clarity</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['diamond_clarity'])) : echo $data['diamond_clarity'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Diamond Color</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['diamond_color'])) : echo $data['diamond_color'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Diamond Setting</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['diamond_setting'])) : echo $data['diamond_setting'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Collection</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['collection'])) : echo $data['collection'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Metal</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['metal'])) : echo $data['metal'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Metal Color</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['metal_color'])) : echo $data['metal_color'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Dimensions</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['dimensions'])) : echo $data['dimensions'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Diamond Shape</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['diamond_shape'])) : echo $data['diamond_shape'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Occasion</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (!empty($data['occasion'])) : echo $data['occasion'] ?><?php endif; ?></div>
                    </div><hr>

                    <h4>Product is active</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (isset($data['is_active']) && $data['is_active'] == "1") { ?>Yes<?php } else { ?>No <?php } ?></div>
                    </div><hr>

                    <h4>Product is Custom</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (isset($data['is_custom']) && $data['is_custom'] == "1") { ?>Yes<?php } else { ?>No <?php } ?></div>
                    </div><hr>

                    <h4>Product Type</h4>
                    <div class="form-group">
                        <div class="panel-body"><?php if (isset($data['type']) && $data['type'] == "1") { ?>Ring<?php } else { ?>Chain <?php } ?></div>
                    </div><hr>
                    
                    <h4>Images</h4>

                    <div class="form-group">
                    <?php if (!empty($data['image_details']))
                        for ($i = 0; $i < count($data['image_details']); $i++) { ?>
                        <div id="remove_<?= $data['image_details'][$i]->image_id ?>" class="form-group left" style="display: inline; margin-right: 1rem;">
                            <img style="border: 1px solid #f2ccff;" width="100" height="100" src="<?php if (!empty($data['image_details'][$i]->file_name)) : echo base_url() . '/assets/upload/product/' . $data['image_details'][$i]->file_name;  ?> <?php endif; ?>">
                        </div>
                    <?php } ?>
                    </div><hr>
                </div>
            </div>
        </main>
    </div>