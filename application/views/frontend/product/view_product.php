<div class="container single_product_container">
    <div class="row">
        <?php //echo "<pre>"; print_r($product); 
        // $gold_price = (int) $product['gold_price'];
        // $totalPrice = (int) $product['diamond_one'] + (int) $product['diamond_two'] + (int) $product['gold_price'] + (int) $product['making_charges'] + (int) $product['gst_price'];
        $makingCharges = 0;
        $diamondOneCost = 0;
        $diamondTwoCost = 0;
        $stoneCharges = 0;
        $goldCharges = 0;
        if(!empty($product['making_cost'])){
            $makingCharges = trim($product['making_cost']) * trim($product['metal']);
        }
        if(!empty($product['diamond_one'])){
            $diamondOneCost = trim($product['diamond_one']) * trim($product['diamond_one_weight']);
        }
        if(!empty($product['diamond_two'])){
            $diamondTwoCost = trim($product['diamond_two']) * trim($product['diamond_two_weight']);
        }
        if(!empty($product['stone_cost'])){
            $stoneCharges = trim($product['stone_cost']) * trim($product['stone_wt']);
        }
        $goldCharges = trim($chain[0]->gold_price) * trim($product['metal']);
        $finalPriceWithoutGold = $makingCharges + $diamondOneCost + $diamondTwoCost + $stoneCharges;
        // echo "final"; echo $finalPriceWithoutGold;
        // echo "gold"; echo $goldCharges;
		?>
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <div class="single_product_pics">
                <div class="row">
                    <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                        <div class="single_product_thumbnails">
                            <ul>
                                <li class="active"><img
                                        src="<?= base_url() ?>assets/upload/product/<?= $product['image_details'][0]->file_name ?>"
                                        alt=""
                                        data-image="<?= base_url() ?>assets/upload/product/<?= $product['image_details'][0]->file_name ?>">
                                </li>
                                <?php if (isset($product['image_details'][1])) { ?>
                                <li><img src="<?= base_url() ?>assets/upload/product/<?= $product['image_details'][1]->file_name ?>"
                                        alt=""
                                        data-image="<?= base_url() ?>assets/upload/product/<?= $product['image_details'][1]->file_name ?>">
                                </li>
                                <?php } ?>
                                <?php if (isset($product['image_details'][2])) { ?>
                                <li><img src="<?= base_url() ?>assets/upload/product/<?= $product['image_details'][2]->file_name ?>"
                                        alt=""
                                        data-image="<?= base_url() ?>assets/upload/product/<?= $product['image_details'][2]->file_name ?>">
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 image_col order-lg-2 order-1">
                        <div class="single_product_image">
                            <div class="single_product_image_background"
                                style="background-image:url(<?= base_url() ?>assets/upload/product/<?= $product['image_details'][0]->file_name ?>)">
                            </div>
                        </div>
                        <small class="block">* Customised earrings available on order.</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <div class="product_details">
                <div class="product_details_title">
                    <h2 class="product-name"><?= $product['name'] ?></h2>
                    <?= $product['description'] ?>
                </div>
                <!-- <div class="original_price">Rs.<?= $finalPriceWithoutGold + 4000 ?></div> -->
                <input type="hidden" name="product_price" id="product_price" value="" />
                <input type="hidden" id="product_price_withoutGold" value="<?= $finalPriceWithoutGold ?>" />
                <input type="hidden" id="gold_price" value="<?= $goldCharges ?>" />
                <div class="product_price">
                    <i class="fas fa-rupee-sign price-sign"></i>
                </div>
                <div><a class="productdescription" href="#productdescription">Product Details</a></div>
                <!-- <ul class="star_rating">
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				</ul> -->
                <div class="product_color">
                    <!-- <?php //if($product['is_custom']){ ?>
					<div class="form-group">
						<label for="letter">Enter Initial Letter of Your Loved ones.</label>
						<input maxlength="1" type="text" class="form-control" id="letter" name="letter" placeholder="Enter Initial Letter" value="<?php //if (!empty($data['letter'])) : echo $data['letter'];  ?> <?php //endif; ?>">
						<?php //echo form_error('letter', '<span class="text-danger">', '</span>'); ?>
					</div> -->
                    <?php //} 
                    if($product['product_category'] === 'Pendant') {

                     ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input radio-type ring_price avvv1" data-chainText="default"
                            data-chainid="0" value="0" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                            checked>
                        <label class="form-check-label radio-text" for="flexRadioDefault1">
                            Without Chain
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input radio-type ring_price1 avvv1"
                            data-chainText="with_platinum_chain" data-chainid="<?= $chain[0]->id ?>"
                            value="<?= $chain[0]->with_platinum_chain ?>" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault2">
                        <label class="form-check-label radio-text" for="flexRadioDefault2">
                            With Chain
                        </label>
                    </div>
                    <?php } ?>
                </div>
                <div class="product_color">
                    <h2 class="product-name">Gold Karatage</h2>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input radio-type karat1 karatv2" data-chainText="default"
                            data-chainid="0" value="0.60" type="radio" name="karat" id="karat1" checked>
                        <label class="form-check-label radio-text" for="karat1">
                            14 karat
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input radio-type karat2 karatv2" data-chainText="with_platinum_chain"
                            data-chainid="0" value="0.76" type="radio" name="karat" id="karat2">
                        <label class="form-check-label radio-text" for="karat2">
                            18 karat
                        </label>
                    </div>
                </div>
                <?php if($product['is_custom']){ ?>
                <div class="form-group">
                    <input style="height:40px" type="text" class="form-control" id="initial_name" name="initial_name"
                        placeholder="Type your letter here" value="">
                    <span id="addError" class="text-danger hide">Name cannot be empty.</span>
                    <?php echo form_error('initial_name', '<span class="text-danger">', '</span>'); ?>
                    <p>
                        <small class="block">Note: If you are ordering more than one pendant with different letters
                            please type your choice of letters as X Y Z </small>
                    </p>
                </div>
                <?php } ?>
            </div>
            <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                <!-- <span class="quantity-text">Quantity:</span>
				<div class="quantity_selector">
						<span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
						<span id="quantity_value">1</span>
						<span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
				</div> -->
                <div class="red_button add_to_cart_button"><a onclick="addToCart(<?= $product['product_id'] ?>)"
                      href="#"  >add to cart</a></div>
                <!-- <div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div> -->
            </div>
            <div class="free_delivery d-flex flex-row align-items-center free_delivery_mobile">
                <span class="ti-loop easy-return-icon"></span>
                <span class="easy-return">Easy Returns</span>
                <span class="ti-truck free-delivery-icon"></span>
                <span class="free-delivery">Free Delivery</span>
                <span class="ti-agenda certificate"></span>
                <span class="certificate-text">Certified</span>
            </div>
        </div>
    </div>
</div>

</div>
<div class="tabs_section_container">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tabs_container">
                    <ul
                        class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
                        <li id="productdescription" class="tab active" data-active-tab="tab_1"><span>Product
                                Details</span></li>
                        <li class="tab" data-active-tab="tab_2"><span>Price Break-Up</span></li>
                        <li class="tab" data-active-tab="tab_3"><span>Reviews (2)</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <!-- Tab Description -->

                <div id="tab_1" class="tab_container active">
                    <div class="col-xs-12 col-md-6 col-lg-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Product Code
                                <span><?= $product['product_code'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Product Category
                                <span><?= $product['product_category'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Dimensions
                                <span><?= $product['dimensions'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="background-color:#f5f5f5; margin-bottom:-6px;">GOLD DETAILS</li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Gold Purity
                                <span><?= $product['purity'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Gold Weight
                                <span><?= $product['metal'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="background-color:#f5f5f5; margin-bottom:-6px;">CHAIN DETAILS</li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Chain Type
                                <span class="chain-type-text">No Chain</span>
                                <!-- three options -->
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Chain Length
                                <span><?= $product['chain_length'] ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="background-color:#f5f5f5;">DIAMOND DETAILS</li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Diamond Weight
                                <span><?= (float) $product['diamond_one_weight'] + (float) $product['diamond_two_weight'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Total No. of Diamonds
                                <span><?= $product['no_of_diamonds'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Clarity
                                <span><?= $product['diamond_clarity'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Color
                                <span><?= $product['diamond_color'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Diamond Shape
                                <span><?= $product['diamond_shape'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Diamond Setting Type
                                <span><?= $product['diamond_setting'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Occasion
                                <span><?= $product['occasion'] ?></span>
                            </li>
                            <?php if(!empty($product['stone_cost'])){ ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="background-color:#f5f5f5;">GEM STONE DETAILS</li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Gem Stone Type
                                <span><?= $product['stone_type'] ?></span>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <!-- Tab Additional Info -->

                <div id="tab_2" class="tab_container">
                    <div class="col-xs-12 col-md-8 col-lg-8 offset-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="background-color:#f5f5f5; margin-bottom:-6px;">Price Break-up</li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                <span class="chain-price-text">No Chain</span>
                                <span class="chain-price"><i class='fas fa-rupee-sign'></i> 0</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Diamond One
                                <span><i class='fas fa-rupee-sign'></i>
                                    <?= $diamondOneCost ?></span>
                            </li>
                            <?php if(!empty($product['diamond_two'])){ ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Diamond Two
                                <span><i class='fas fa-rupee-sign'></i>
                                    <?= $diamondTwoCost ?></span>
                            </li>
                            <?php } ?>
                            <?php if(!empty($product['stone_cost'])){ ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Stone Cost
                                <span><i class='fas fa-rupee-sign'></i>
                                    <?= $stoneCharges ?></span>
                            </li>
                            <?php } ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Gold
                                <span class="gold-price"><i class='fas fa-rupee-sign'></i>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center product-list">
                                Making Charges
                                <span><i class='fas fa-rupee-sign'></i> <?= $makingCharges ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="background-color:#f5f5f5; margin-bottom:-6px;">Total
                                <span class="final-price"><i class='fas fa-rupee-sign'></i>
                                    <?= $finalPriceWithoutGold ?></span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Tab Reviews -->

                <div id="tab_3" class="tab_container">
                    <div class="row">

                        <!-- User Reviews -->

                        <div class="col-lg-6 reviews_col">
                            <div class="tab_title reviews_title">
                                <h4>Reviews (2)</h4>
                            </div>

                            <!-- User Review -->

                            <div class="user_review_container d-flex flex-column flex-sm-row">
                                <div class="user">
                                    <div class="user_pic"></div>
                                    <div class="user_rating">
                                        <ul class="star_rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="review_date">27 Aug 2016</div>
                                    <div class="user_name">Brandon William</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>

                            <!-- User Review -->

                            <div class="user_review_container d-flex flex-column flex-sm-row">
                                <div class="user">
                                    <div class="user_pic"></div>
                                    <div class="user_rating">
                                        <ul class="star_rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="review_date">27 Aug 2016</div>
                                    <div class="user_name">Brandon William</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Add Review -->

                        <div class="col-lg-6 add_review_col">

                            <div class="add_review">
                                <form id="review_form" action="post">
                                    <div>
                                        <h1>Add Review</h1>
                                        <input id="review_name" class="form_input input_name" type="text" name="name"
                                            placeholder="Name*" required="required" data-error="Name is required.">
                                        <input id="review_email" class="form_input input_email" type="email"
                                            name="email" placeholder="Email*" required="required"
                                            data-error="Valid email is required.">
                                    </div>
                                    <div>
                                        <h1>Your Rating:</h1>
                                        <ul class="user_star_rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                        <textarea id="review_message" class="input_review" name="message"
                                            placeholder="Your Review" rows="4" required
                                            data-error="Please, leave us a review."></textarea>
                                    </div>
                                    <div class="text-left text-sm-right">
                                        <button id="review_submit" type="submit"
                                            class="red_button review_submit_btn trans_300"
                                            value="Submit">submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
function addToCart(id) {
    console.log(parseInt($('.product_price').text()));
    let chain = document.querySelector('input[name="flexRadioDefault"]:checked').getAttribute('data-chainid');
    let chainText = document.querySelector('input[name="flexRadioDefault"]:checked').getAttribute('data-chainText');
    let quantity = 1; // document.getElementById("quantity_value").value;
    let initial_name = "";
    <?php if($product['is_custom']){ ?>
    initial_name = document.getElementById("initial_name").value;

    if (initial_name.length == 0) {
        document.getElementById("addError").classList.remove("hide");
        return false;

    } else {
        document.getElementById("addError").classList.add("hide");
    }
    <?php } ?>
    $.post("<?php echo base_url('welcome/addToCart'); ?>", {
        id: id,
        quantity: parseInt(quantity),
        chainId: parseInt(chain),
        chainText: chainText,
        initial_name: initial_name,
        price: parseInt($('.product_price').text())
    }, function(response) {
        let resp = JSON.parse(response);
        if (resp.status == 'success') {
            window.location.href = resp.redirect_url;
        } else {
            alert('Some problem occurred, please try again.');
        }
    });
}
</script>