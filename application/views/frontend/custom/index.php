<?php //$this->load->view('frontend/slider/index'); 
?><style type="text/css">

</style>
<div id="fh5co-product">
    <div class="container">
        <div class="row animate-box cr-mb-40">
            <h2 style="text-align:center; font-family: Century Gothic;">Make Your Own Combo. Create Your Own Magic!</h2>
            <div class="custom_row">
                <div class="col-md-8 text-center animate-box">
                    <div class="product" style="text-align: -webkit-center;">
                        <div class="product-grid fix-image cr-mt-10" style="background-image:url(<?= base_url() ?>assets/frontend/images/combo/finalchain.jpg);">
                            <div class="slide-content1">
                                <?php if (!empty($pendant)) {
                                    foreach ($pendant as $row) {
                                        if ($row->id != 8) { ?>
                                            <!-- <img class="slider1" data-price="<?= $row->price ?>"
                                        src="<?= base_url() ?>assets/frontend/images/combo/chainposition.png"/> -->
                                            <img class="slider1" data-price="<?= $row->price ?>" src="<?= base_url() ?>assets/frontend/images/combo/onlypendantpng/<?= $row->file_name ?>" />
                                    <?php }
                                    }
                                } else { ?>
                                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                                        <h2>No Products to show.</h2>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="slide-content1">
                                <?php if (!empty($pendant)) {
                                    foreach ($pendant as $row) {
                                        if ($row->id != 7) { ?>
                                            <!-- <img class="slider2" data-price="<?= $row->price ?>"
                                        src="<?= base_url() ?>assets/frontend/images/combo/chainposition.png"/> -->
                                            <img class="slider2" data-price="<?= $row->price ?>" src="<?= base_url() ?>assets/frontend/images/combo/onlypendantpng/<?= $row->file_name ?>" />
                                    <?php }
                                    }
                                } else { ?>
                                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                                        <h2>No Products to show.</h2>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 text-center animate-box cr-mt-20">
                    <h3 class="pendant-text">Pendant 1</h3>
                    <div class="product">
                        <div class="slide-content" style="text-align: -webkit-center;">
                            <div class="w3-section">
                                <button class="arrow-slider left" onclick="plusDivs1(-1)"><i class="ti-arrow-circle-left"></i> </button>
                                <button class="arrow-slider right" onclick="plusDivs1(1)"><i class="ti-arrow-circle-right"></i></button>
                            </div>
                            <?php if (!empty($pendant)) {
                                foreach ($pendant as $row) {
                                    if ($row->id != 8) { ?>
                                        <div class="product-grid mySlides1" data-price="<?= $row->price ?>" data-dweight="<?= $row->diamond_weight ?>" data-gweight="<?= $row->gold_weight ?>" data-productcode="<?= $row->product_code ?>" data-name="<?= $row->name ?>" style="background-image:url(<?= base_url() ?>assets/frontend/images/combo/onlypendantpng/<?= $row->file_name ?>);">
                                        </div>
                                <?php }
                                }
                            } else { ?>
                                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                                    <h2>No Products to show.</h2>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 text-center animate-box cr-mt-20">
                    <h3 class="pendant-text">Pendant 2</h3>
                    <div class="product">
                        <div class="slide-content" style="text-align: -webkit-center;">
                            <div class="w3-center">
                                <div class="w3-section">
                                    <button class="arrow-slider left" onclick="plusDivs2(-1)"><i class="ti-arrow-circle-left"></i></button>
                                    <button class="arrow-slider right" onclick="plusDivs2(1)"><i class="ti-arrow-circle-right"></i></button>
                                </div>
                            </div>
                            <?php if (!empty($pendant)) {
                                foreach ($pendant as $row) {
                                    if ($row->id != 7) { ?>
                                        <div class="product-grid mySlides2" data-price="<?= $row->price ?>" data-dweight="<?= $row->diamond_weight ?>" data-gweight="<?= $row->gold_weight ?>" data-productcode="<?= $row->product_code ?>" data-name="<?= $row->name ?>" style="background-image:url(<?= base_url() ?>assets/frontend/images/combo/onlypendantpng/<?= $row->file_name ?>);">
                                        </div>
                                <?php }
                                }
                            } else { ?>
                                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                                    <h2>No Products to show.</h2>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 pendant1">
                <h3 class="pendant-header">Pendant 1</h3>
                <div class="pendant-details">
                    <div class="pendant-details-container">
                        <span id="pendant1-gwt" style="padding-left:10px;">GOLD WT. 4.523g</span>
                        <span id="pendant1-dwt" style="float:right; padding-right:10px;">DIAMOND WT. 45ct</span>
                    </div>
                    <div>
                        <span style="padding-left:12px;">(18K white gold)</span>
                        <span style="float:right; padding-right:30px;">(VS-VVS GH)</span>
                    </div>
                    <h2 style="text-align:center; margin-top:16px; color:#828282;">RS. <span id="pendant1-price"></span></h2>
                </div>
            </div>
            <div class="col-md-3 pendant2">
                <h3 class="pendant-header">Pendant 2</h3>
                <div class="pendant-details">
                    <div class="pendant-details-container">
                        <span id="pendant2-gwt" style="padding-left:10px;">GOLD WT. 4.523g</span>
                        <span id="pendant2-dwt" style="float:right; padding-right:10px;">DIAMOND WT. 45ct</span>
                    </div>
                    <div>
                        <span style="padding-left:12px;">(18K white gold)</span>
                        <span style="float:right; padding-right:30px;">(VS-VVS GH)</span>
                    </div>
                    <h2 style="text-align:center; margin-top:16px; color:#828282;">RS. <span id="pendant2-price"></span> </h2>
                </div>
            </div>
            <div class="col-md-3 chain-container">
                <h3 class="pendant-header">Chain 1+Chain 2</h3>
                <div class="pendant-details">
                    <div class="pendant-details-container1">
                        <span>18KT White Gold Chains</span>
                    </div>
                    <?php if (!empty($chain)) { ?>
                        <input type="hidden" value="<?= $chain[0]->with_gold_chain * 2 ?>" id="chain-price" />
                        <h2 style="text-align:center; margin-top:35px; color:#828282;">RS. <?= $chain[0]->with_gold_chain * 2 ?></h2>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-3 total">
                <h3 class="pendant-header">Total Price</h3>
                <div class="pendant-details">
                    <div class="pendant-details-container1">
                    </div>
                    <h2 id="total-price" style="text-align:center; margin-top:55px; color:#828282;">RS. </h2>
                </div>
            </div>
        </div>
        <input type="hidden" value="" id="pendant1ID" />
        <input type="hidden" value="" id="pendant2ID" />
        <div class="red_button add_to_cart_button" style="float: right;"><a onclick="addToCart()" href="#">add to cart</a></div>
    </div>
</div>
<script>
    let slideIndex1 = 1;
    showDivs1(slideIndex1);

    function plusDivs1(n) {
        showDivs1(slideIndex1 += n);
    }

    function currentDiv1(n) {
        showDivs1(slideIndex1 = n);
    }

    function showDivs1(n) {
        let i;
        let x = document.getElementsByClassName("mySlides1");
        let y = document.getElementsByClassName("slider1");
        let chainPrice = document.getElementById("chain-price").value;
        let totalPrice = 0;

        let p2Price = document.getElementById("pendant2-price").innerHTML;

        if (slideIndex1 > x.length) {
            let price = x[0].getAttribute('data-price');
            let pid = x[0].getAttribute('data-productcode');
            let gwt = x[0].getAttribute('data-gweight');
            let dwt = x[0].getAttribute('data-dweight');
            totalPrice = parseInt(price) + parseInt(chainPrice) + parseInt(p2Price);

            document.getElementById("pendant1ID").value = pid;
            document.getElementById("pendant1-price").innerHTML = parseInt(price);
            document.getElementById("pendant1-gwt").innerHTML = "GOLD WT. " + gwt;
            document.getElementById("pendant1-dwt").innerHTML = "DIAMOND WT. " + dwt;
        } else {
            if (n < 1) {
                slideIndex1 = x.length;
            }
            let price = x[slideIndex1 - 1].getAttribute('data-price');
            let pid = x[slideIndex1 - 1].getAttribute('data-productcode');
            let gwt = x[slideIndex1 - 1].getAttribute('data-gweight');
            let dwt = x[slideIndex1 - 1].getAttribute('data-dweight');
            totalPrice = parseInt(price) + parseInt(chainPrice) + parseInt(p2Price);

            document.getElementById("pendant1ID").value = pid;
            document.getElementById("pendant1-price").innerHTML = parseInt(price);
            document.getElementById("pendant1-gwt").innerHTML = "GOLD WT. " + gwt;
            document.getElementById("pendant1-dwt").innerHTML = "DIAMOND WT. " + dwt;

        }
        document.getElementById("total-price").innerHTML = "Rs. " + totalPrice;

        if (n > x.length) {
            slideIndex1 = 1
        }
        if (n > y.length) {
            slideIndex1 = 1
        }
        if (n < 1) {
            slideIndex1 = x.length
        }

        if (n < 1) {
            slideIndex1 = y.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < y.length; i++) {
            y[i].style.display = "none";
        }
        x[slideIndex1 - 1].style.display = "block";
        y[slideIndex1 - 1].style.display = "block";
    }


    // slider 2
    let slideIndex2 = 14;
    showDivs2(slideIndex2);

    function plusDivs2(n) {
        showDivs2(slideIndex2 += n);
    }

    function currentDiv2(n) {
        showDivs2(slideIndex2 = n);
    }

    function showDivs2(n) {
        let i;
        let x = document.getElementsByClassName("mySlides2");
        let y = document.getElementsByClassName("slider2");
        let chainPrice = document.getElementById("chain-price").value;
        let p1Price = document.getElementById("pendant1-price").innerHTML;
        let totalPrice = 0;

        if (slideIndex2 > x.length) {
            let price = x[0].getAttribute('data-price');
            let pid = x[0].getAttribute('data-productcode');
            let gwt = x[0].getAttribute('data-gweight');
            let dwt = x[0].getAttribute('data-dweight');

            totalPrice = parseInt(price) + parseInt(chainPrice) + parseInt(p1Price);
            document.getElementById("pendant2ID").value = pid;
            document.getElementById("pendant2-price").innerHTML = parseInt(price);
            document.getElementById("pendant2-gwt").innerHTML = "GOLD WT. " + gwt;
            document.getElementById("pendant2-dwt").innerHTML = "DIAMOND WT. " + dwt;
        } else {
            if (n < 1) {
                slideIndex2 = x.length;
            }
            let price = x[slideIndex2 - 1].getAttribute('data-price');
            let pid = x[slideIndex2 - 1].getAttribute('data-productcode');
            let gwt = x[slideIndex2 - 1].getAttribute('data-gweight');
            let dwt = x[slideIndex2 - 1].getAttribute('data-dweight');
            totalPrice = parseInt(price) + parseInt(chainPrice) + parseInt(p1Price);
            document.getElementById("pendant2ID").value = pid;
            document.getElementById("pendant2-price").innerHTML = parseInt(price);
            document.getElementById("pendant2-gwt").innerHTML = "GOLD WT. " + gwt;
            document.getElementById("pendant2-dwt").innerHTML = "DIAMOND WT. " + dwt;

        }
        document.getElementById("total-price").innerHTML = "Rs. " + totalPrice;


        if (n > x.length) {
            slideIndex2 = 1
        }
        if (n > y.length) {
            slideIndex2 = 1
        }
        if (n < 1) {
            slideIndex2 = x.length
        }

        if (n < 1) {
            slideIndex2 = y.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < y.length; i++) {
            y[i].style.display = "none";
        }
        x[slideIndex2 - 1].style.display = "block";
        y[slideIndex2 - 1].style.display = "block";
    }

    function addToCart() {
        let pendant1ID = document.getElementById("pendant1ID").value;
        let pendant2ID = document.getElementById("pendant2ID").value;
        $.post("<?php echo base_url('welcome/addToCartCustom'); ?>", {
            pendant1ID: pendant1ID,
            pendant2ID: pendant2ID
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