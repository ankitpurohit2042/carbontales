<?php $this->load->view('frontend/slider/index'); ?>
<div id="fh5co-services" class="fh5co-bg-section" style="background-color: #e7b3ff">
    <div class="container">
        <div class="row">
            <div class="c-header-mobile">
                <img class="c-header-mobile-img img-responsive"
                    src="<?= base_url() ?>assets/frontend/images/logo/4CS.svg" />
                <p class="c-learn-p"><a href="<?php echo site_url('carbons') ?>" class="btn c-learn">Learn More</a></p>
            </div>
            <div class="cheader">
                <h2 class="c-header">4 C's of CARBONTALES</h2>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <img class="c-logo" src="<?= base_url() ?>assets/frontend/images/logo/c_circle.svg" />
                        <h3 class="c-text">CERTIFIED</h3>
                        <p class="c-desc">Every piece of jewellery is IGI certified and BIS Hallmarked.</p>
                        <div class="igi-container"><img class="igi-logo"
                                src="<?= base_url() ?>assets/frontend/images/logo/igi.png" />
                            <img class="hallmark-logo img-responsive"
                                src="<?= base_url() ?>assets/frontend/images/logo/BIS.svg" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <!-- <span class="icon">
            <i class="icon-wallet"></i>
          </span> -->
                        <img class="c-logo" src="<?= base_url() ?>assets/frontend/images/logo/c_circle.svg" />
                        <h3 class="c-text">CUSTOMISED</h3>
                        <i class="bi bi-arrow-down-circle-fill"></i>
                        <p class="c-desc">Our pencil is our magic wand. We design and create your dream jewellery that's
                            unique to you and fits your budget, occasion and purpose.</p>
                        <!-- <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p> -->
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <!-- <span class="icon">
            <i class="icon-paper-plane"></i>
          </span> -->
                        <img class="c-logo" src="<?= base_url() ?>assets/frontend/images/logo/c_circle.svg" />
                        <h3 class="c-text">COST EFFICIENT</h3>
                        <p class="c-desc">We Pride ourselves in creating products with no overheads like rent &
                            inventory costs, pass on this benefit to our customers & give competitive market prices.</p>
                        <!-- <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p> -->
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <!-- <span class="icon">
            <i class="icon-paper-plane"></i>
          </span> -->
                        <img class="c-logo" src="<?= base_url() ?>assets/frontend/images/logo/c_circle.svg" />
                        <h3 class="c-text">CRAFTED WITH FINESSE</h3>
                        <p class="c-desc">Handcrafted with great expertise and extreme precision, we believe in
                            delivering an impeccably finished product.</p>
                        <!-- <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-product" class="shop-product" style="padding: 3em 0em 0em 0em;">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center home-product-head">
                <h2><a class="shop-link" href="<?= base_url() ?>product" class="">Shop Our Creations</a></h2>
            </div>
        </div>
        <div class="row">
            <?php if (!empty($product)) {
        $count = count($product) <= 4 ? count($product) : 4;
        for ($i = 0; $i< $count; $i++) {
          if(isset($product[$i])) {
      ?>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 animate-box text-center">
                <a href="<?= base_url() ?>product/<?= $product[$i]['product_id'] ?>">
                    <div class="product-grid-home"
                        style="background-image:url(<?= base_url() ?>assets/upload/product/<?= $product[$i]['image_details'][0]->file_name ?>">
                    </div>
                    <h5 class="productName"><?= $product[$i]['name'] ?></h5>
                </a>
            </div>
            <?php }}
        for ($j = 3; $j< 4; $j++) { ?>
            <!-- <div class="col-xs-6 hidden-md hidden-lg text-center animate-box">
            <div class="">
            <a href="<?= base_url() ?>product/<?= $product[$j]['product_id'] ?>">
            <img class="product-grid-home" src="<?= base_url() ?>assets/upload/product/<?= $product[$i]['image_details'][0]->file_name ?>" />
               <div class="product-grid-home" style="background-image:url(<?= base_url() ?>assets/upload/product/<?= $product[$j]['image_details'][0]->file_name ?>">
              </div>
            </a>
            </div>
          </div> -->

            <?php  }
      } else { ?>
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>No Products to show.</h2>
                <!-- <p>Dign  issimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> -->
            </div>
            <?php } ?>
        </div>
        <p style="float: right;"><a href="<?= base_url() ?>product" class="btn btn-primary btn-outline">View All</a></p>
    </div>
</div>
</div>

<!-- Make your own start -->

<div id="fh5co-testimonial" class="fh5co-bg-section"
    style="background-color: #e7b3ff; padding-top:0em; padding-bottom:5em;">
    <div class="container">
        <div class="row animate-box" style="position: relative;">
            <div class="col-md-4 colsm-12">
                <img class="own-image" src="<?= base_url() ?>assets/frontend/images/slider/CHAINPICTURE.png" alt="user">
            </div>
            <div class="col-md-8 col-sm-12 home-own-head"
                style="position: absolute; top:0; right: 0; margin-top: 80px;">
                <h1 class="mobile-h1">Layering never goes out of trend!</h1>
                <a class="own-link" href="<?php echo site_url('make-your-own') ?>">Make Your Own Combo</a>
                <h3 class="own-magic">Create your own magic!</h3>
                <div class="btm-head">
                    <p class="btm-text">
                        Choose from our exclusive range of pendants <br> and make a combination of your choice.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Make your own end -->

<!-- <div id="fh5co-testimonial" class="fh5co-bg-section">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
        <span>Testimony</span>
        <h2>Happy Clients</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="row animate-box">
          <div class="owl-carousel owl-carousel-fullwidth">
            <div class="item">
              <div class="testimony-slide active text-center">
                <figure>
                  <img src="<?= base_url() ?>assets/frontend/images/person1.jpg" alt="user">
                </figure>
                <span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
                <blockquote>
                  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                </blockquote>
              </div>
            </div>
            <div class="item">
              <div class="testimony-slide active text-center">
                <figure>
                  <img src="<?= base_url() ?>assets/frontend/images/person2.jpg" alt="user">
                </figure>
                <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                <blockquote>
                  <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                </blockquote>
              </div>
            </div>
            <div class="item">
              <div class="testimony-slide active text-center">
                <figure>
                  <img src="<?= base_url() ?>assets/frontend/images/person3.jpg" alt="user">
                </figure>
                <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                <blockquote>
                  <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->


<div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background: #f9e6ff;">
    <div class="container">
        <div class="row">
            <div class="display-t">
                <div class="display-tc">
                    <div class="col-md-4 col-sm-4 animate-box">
                        <a href="<?php echo site_url('contact') ?>">
                            <div class="feature-center">
                                <!-- <span class="icon"> -->
                                <!-- <div style="background-image:url(<?= base_url() ?>assets/frontend/images/logo/SERVICE.svg)"></div> -->
                                <!-- <i class="icon-eye"></i> -->
                                <img class="icon"
                                    src="<?= base_url() ?>assets/frontend/images/logo/static/GETINTOUCH.png" />
                                <!-- </span> -->
                                <div class="counter-label">Get in touch</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 animate-box">
                        <a href="<?php echo site_url('inside-box') ?>">
                            <div class="feature-center">
                                <!-- <span class="icon"> -->
                                <img class="icon"
                                    src="<?= base_url() ?>assets/frontend/images/logo/static/INSIDEBOX.png" />
                                <!-- </span> -->

                                <div class="counter-label">What's inside your box</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 animate-box">
                        <a href="<?php echo site_url('gifting') ?>">
                            <div class="feature-center">
                                <!-- <span class="icon"> -->
                                <img class="icon"
                                    src="<?= base_url() ?>assets/frontend/images/logo/static/giftingmadeeasy.png" />
                                <!-- </span> -->
                                <div class="counter-label">Gifting made easy</div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div id="fh5co-started">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
        <h2>Newsletter</h2>
        <p>Just stay tune for our latest Product. Now you can subscribe</p>
      </div>
    </div>
    <div class="row animate-box">
      <div class="col-md-8 col-md-offset-2">
        <form class="form-inline">
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <button type="submit" class="btn btn-default btn-block">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->