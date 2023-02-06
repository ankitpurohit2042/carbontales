<link type="text/css" href="<?= base_url() ?>assets/frontend/css/fontawesome/css/all.css" rel="stylesheet">
<div id="fh5co-about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 cart-heading">
                <h3>My Shopping Cart</h3>
            </div>
        </div>
        <div class="container">
            <!-- <form action="<?php echo base_url('checkout'); ?>" method="POST"> -->
                <!-- <div class="row"> -->
                    <div class="row col-md-4 col-lg-4 col-xs-12 cart-summary" style="float:right;">
                        <?php //if($i <= 1) { 
                        //echo "<pre>"; print_r($this->cart->contents());
                        //if ($this->cart->has_options($items['rowid']) == TRUE){ 
                        ?>
                        <div class=" col-xs-12" style="padding:10px 0px 0px 0px;">
                            <h3 style="text-align: center;">Order Summary</h3>
                            <div style="display: flex;justify-content: space-between; padding: 10px;">
                                <div style="display:flex">Total
                                    (<?= $this->cart->total_items() ?><?= $this->cart->total_items() > 1 ? ' Items' : ' Item' ?>)
                                </div>
                                <div style="display:inline"><i class="fas fa-rupee-sign"></i> <?= $this->cart->total(); ?>
                                </div>
                            </div>
                            <div style="display: flex;justify-content: space-between; padding: 10px;">
                                <div style="display:flex">Shipping</div>
                                <div style="display:inline">Free
                                </div>
                            </div>
                            <hr>
                            <div style="display: flex;justify-content: space-between; font-size: 24px; color: black;">
                                <div style="display:flex">Total Payble</div>
                                <div style="display:inline"><i class="fas fa-rupee-sign"></i> <?= $this->cart->total(); ?>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group" style="margin-bottom:0px;">
                                <p class="order-btn">
                                    <a href="<?php echo base_url('checkout'); ?>" class="btn btn-primary">Place Order</a>
                                </p>
                            </div>
                        </div>
                        <?php //} //} 
                        ?>
                    </div>
                    <?php foreach ($this->cart->contents() as $key => $items) { ?>
                        <div class="row col-md-8 col-lg-8 col-xs-12 cart-details cart-details-mobile" style="margin-bottom:20px;" id="rowid_<?= $items['rowid'] ?>">
                            <?php if ($this->cart->has_options($items['rowid']) == TRUE) : ?>
                                <div class=" col-xs-4">
                                    <img class="img-responsive" src="<?= base_url() ?>assets/upload/product/<?= $items['options']['image'] ?>" alt="" />
                                </div>
                                <div class=" col-xs-8">
                                    <div class="product-details">
                                        <div style="display:flex"><?= $items['options']['pname'] ?></div>
                                        <div style="display:inline;"><i class="fas fa-rupee-sign price-sign"></i>
                                            <?= $items['subtotal'] ?>
                                        </div>
                                    </div>
                                    <div class="product-code-details">
                                        <div style="display:flex">Product Code: <?= $items['options']['product_code'] ?></div>
                                        <!-- <?php if ($items['options']['chain_text'] != "default") { ?>
                                            <div style="display:flex">Chain Type: <?= $items['options']['chain_text'] == "with_gold_chain" ? "Gold" : "Platinum";  ?></div>
                                        <?php } ?> -->
                                    </div>
                                    <!-- <div class="product-code-details">
                                        <div style="display:flex">Diamond Weight: <?= $items['options']['diamond_weight'] ?></div>
                                        <div style="display:flex">Gold Weight: <?= $items['options']['metal_weight'] ?></div>
                                    </div> -->
                                    <div class="quantity_selector_cart">
                                        <span onclick="removeQuantity('<?= $items['rowid'] ?>')" class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        <span id="quantity_value_<?= $items['rowid'] ?>"><?= $items['qty'] ?></span>
                                        <input type="hidden" value="<?= $items['qty'] ?>" id="quantityValue_<?= $items['rowid'] ?>" />
                                        <span onclick="addQuantity('<?= $items['rowid'] ?>')" class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    </div>
                                    <?php if ($items['options']['is_custom']) { ?>
                                        <div class="form-group">
                                            <input style="height:40px" type="text" class="form-control" id="initial_name" name="initial_name" placeholder="Type your letter here" value="<?php if (!empty($items['initial_name'])) : echo $items['initial_name'];  ?> <?php endif; ?>">

                                            <?php echo form_error('initial_name', '<span class="text-danger">', '</span>'); ?>
                                            <p>
                                                <small class="block">Note: If you are ordering more than one pendant with different letters please type your choice of letters as X Y Z </small>
                                            </p>
                                        </div>
                                    <?php } ?>
                                    <div class="form-group remove-item-div">
                                        <input type="submit" onclick="removeItem('<?= $items['rowid'] ?>')" value="Remove Item" class="btn remove-item btn-primary">
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php } ?>
                <!-- </div> -->
            <!-- </form> -->

        </div>
    </div>
</div>
<script>
    function addQuantity(id) {
        if (id) {
            let quantity = document.getElementById("quantityValue_" + id).value;
            let newValue = parseInt(quantity) + 1;
            // document.getElementById("quantity_value_"+id).innerHTML = newValue;
            // document.getElementById("quantityValue_"+id).value = newValue;
            $.post("<?php echo base_url('welcome/updateCart'); ?>", {
                rowid: id,
                quantity: newValue,
            }, function(response) {
                let resp = JSON.parse(response);
                if (resp.status == 'success') {
                    window.location.href = resp.redirect_url;
                    // var toRemove = document.getElementById("rowid_"+rowid);
                    // toRemove.remove();
                } else {
                    alert('Some problem occurred, please try again.');
                }
            });
        }
    }

    function removeQuantity(id) {
        if (id) {
            let quantity = document.getElementById("quantityValue_" + id).value;
            if (quantity == 1) {} else {
                let newValue = parseInt(quantity) - 1;
                $.post("<?php echo base_url('welcome/updateCart'); ?>", {
                    rowid: id,
                    quantity: newValue,
                }, function(response) {
                    let resp = JSON.parse(response);
                    if (resp.status == 'success') {
                        window.location.href = resp.redirect_url;
                        // var toRemove = document.getElementById("rowid_"+rowid);
                        // toRemove.remove();
                    } else {
                        alert('Some problem occurred, please try again.');
                    }
                });

                document.getElementById("quantityValue_" + id).value = newValue;
                document.getElementById("quantity_value_" + id).innerHTML = newValue;
            }
        }
    }

    function removeItem(rowid) {
        if (confirm("Are you sure you want to remove this item?")) {
            $.post("<?php echo base_url('welcome/removeItem'); ?>", {
                rowid: rowid
            }, function(response) {
                let resp = JSON.parse(response);
                if (resp.status == 'success') {
                    window.location.href = resp.redirect_url;
                    var toRemove = document.getElementById("rowid_" + rowid);
                    toRemove.remove();
                } else {
                    alert('Some problem occurred, please try again.');
                }
            });
        }
    }
</script>