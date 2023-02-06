<?php //$this->load->view('frontend/slider/index'); 
?>
<div id="fh5co-product">
    <div class="container">
        <div class="row animate-box">
            <!-- <div class="custom_row"> -->
            <?php if (!empty($product)) {
                // echo count($product);
                
                for ($i = 0; $i < count($product); $i++) {
                    if (isset($product[$i])) {
                        $makingCharges = 0;
                        $diamondOneCost = 0;
                        $diamondTwoCost = 0;
                        $stoneCharges = 0;
                        $goldCharges = 0;
                        if(!empty($product[$i]['making_cost']) && !empty($product[$i]['metal']) ){
                            // echo "<pre>"; print_r($product[$i]['making_cost']);echo "<br>";
                            $makingCharges = trim($product[$i]['making_cost']) * trim($product[$i]['metal']);
                        }
                        if(!empty($product[$i]['diamond_one']) && !empty($product[$i]['diamond_one_weight'])){
                            $diamondOneCost = trim($product[$i]['diamond_one']) * trim($product[$i]['diamond_one_weight']);
                        }
                        if(!empty($product[$i]['diamond_two'])){
                            $diamondTwoCost = trim($product[$i]['diamond_two']) * trim($product[$i]['diamond_two_weight']);
                        }
                        if(!empty($product[$i]['stone_cost']) && !empty($product[$i]['stone_wt'])){
                            $stoneCharges = trim($product[$i]['stone_cost']) * trim($product[$i]['stone_wt']);
                        }
                        $goldCharges = trim($chain[0]->gold_price) * trim(!empty($product[$i]['metal']) ? $product[$i]['metal'] : 1) * 0.60;
                        $finalPrice = $makingCharges + $diamondOneCost + $diamondTwoCost + $stoneCharges + $goldCharges;
                        ?>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-6 text-center animate-box">
                <!-- <div class=" product"> -->
                <a href="<?= base_url() ?>product/<?= $product[$i]['product_id'] ?>">
                    <!-- <img 
                                    class="product-grid"
                                    src="<?= base_url() ?>assets/upload/product/<?= $product[$i]['image_details'][0]->file_name ?>" /> -->
                    <div class="product-grid"
                        style="background-image:url(<?= base_url() ?>assets/upload/product/<?= $product[$i]['image_details'][0]->file_name ?>);">
                    </div>
                </a>
                <div class="product-desc">
                    <h3 class="productListName"><a
                            href="<?= base_url() ?>product/<?= $product[$i]['product_id'] ?>"><?= $product[$i]['name'] ?></a>
                        <br> <span class="price">Rs.<?= $finalPrice ?></span>
                    </h3>
                </div>
                <!-- </div> -->
            </div>
            <?php }
                }
            } else { ?>
            <div class="col-md-8 col-xs-6 col-md-offset-2 text-center fh5co-heading">
                <h2>No Products to show.</h2>
                <!-- <p>Dign  issimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> -->
            </div>
            <?php } ?>
            <!-- </div> -->
        </div>
    </div>
</div>