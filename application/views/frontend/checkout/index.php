<div id="fh5co-contact">
    <div class="container">
        <?php if ($this->session->flashdata('msg') !== null) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
        <?php } ?>
        <?php if ($this->session->flashdata('error') !== null) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-7">
                <h3>Add Details</h3>
                <form action="<?php echo base_url('checkout'); ?>" method="POST">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="fname">First Name</label> -->
                            <input name="name" type="text" class="form-control" placeholder="Name"
                                value="<?php echo set_value('name'); ?>" />
                            <?php echo form_error('name', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="lname">Last Name</label> -->
                            <input name="email" type="text" class="form-control" placeholder="Email"
                                value="<?php echo set_value('email'); ?>" />
                            <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="lname">Last Name</label> -->
                            <input name="mobile" type="text" class="form-control" placeholder="Mobile No"
                                value="<?php echo set_value('mobile'); ?>" />
                            <?php echo form_error('mobile', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="lname">Last Name</label> -->
                            <input name="pincode" type="text" class="form-control" placeholder="Pincode"
                                value="<?php echo set_value('pincode'); ?>" />
                            <?php echo form_error('pincode', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="lname">Last Name</label> -->
                            <input name="house" type="text" class="form-control" placeholder="Apartment/House/Flat No"
                                value="<?php echo set_value('house'); ?>" />
                            <?php echo form_error('house', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="lname">Last Name</label> -->
                            <input name="street" type="text" class="form-control" placeholder="Street/Colony/Area Name"
                                value="<?php echo set_value('street'); ?>" />
                            <?php echo form_error('street', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <select  name="state" class="required form-control">
                                <option value="" selected="selected">-</option>
                                <option value="1">Andaman and Nicobar Islands</option>
                                <option value="2">Andhra Pradesh</option>
                                <option value="3">Arunachal Pradesh</option>
                                <option value="4">Assam</option>
                                <option value="5">Bihar</option>
                                <option value="6">Chandigarh</option>
                                <option value="7">Chhattisgarh</option>
                                <option value="8">Dadra and Nagar Haveli</option>
                                <option value="9">Daman and Diu</option>
                                <option value="10">Delhi</option>
                                <option value="11">Goa</option>
                                <option value="12">Gujarat</option>
                                <option value="13">Haryana</option>
                                <option value="14">Himachal Pradesh</option>
                                <option value="15">Jammu and Kashmir</option>
                                <option value="16">Jharkhand</option>
                                <option value="17">Karnataka</option>
                                <option value="18">Kerala</option>
                                <option value="19">Lakshadweep</option>
                                <option value="20">Madhya Pradesh</option>
                                <option value="21">Maharashtra</option>
                                <option value="22">Manipur</option>
                                <option value="23">Meghalaya</option>
                                <option value="24">Mizoram</option>
                                <option value="25">Nagaland</option>
                                <option value="26">Orissa</option>
                                <option value="27">Pondicherry</option>
                                <option value="28">Punjab</option>
                                <option value="29">Rajasthan</option>
                                <option value="30">Sikkim</option>
                                <option value="31">Tamil Nadu</option>
                                <option value="32">Tripura</option>
                                <option value="33">Uttar Pradesh</option>
                                <option value="34">Uttarakhand</option>
                                <option value="35">West Bengal</option>
                                <option value="301">UTTARANCHAL</option>
                                <option value="302">TELANGANA</option>
                            </select>
                            <!-- <label for="lname">Last Name</label> -->
                            <!-- <input name="city" type="text" class="form-control" placeholder="City/District"
                                value="<?php echo set_value('city'); ?>" /> -->
                            <?php echo form_error('state', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="lname">Last Name</label> -->
                            <input name="city" type="text" class="form-control" placeholder="City/District"
                                value="<?php echo set_value('city'); ?>" />
                            <?php echo form_error('city', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control"
                                placeholder="Additional Message(Optional)"><?php echo set_value('message'); ?></textarea>
                            <?php echo form_error('message', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div> -->

                


            </div>
            <div class="col-md-5">
                <div class="fh5co-contact-info">
                    <h3 class="text-center">Order Summary</h3>
                    <div style="display: flex;justify-content: space-between; padding: 10px;">
                        <div style="display:flex">Total
                            (<?= $this->cart->total_items() ?><?= $this->cart->total_items() > 1 ? ' Items': ' Item' ?>)
                        </div>
                        <div style="display:inline"><i class="fas fa-rupee-sign"></i><?= $this->cart->total(); ?></div>
                    </div>
                    <hr>
                    <div style="display: flex;justify-content: space-between; font-size: 24px; color: black;">
                        <div style="display:flex">Total Payble</div>
                        <div style="display:inline"><i class="fas fa-rupee-sign"></i><?= $this->cart->total(); ?></div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <p style="float: right;">
                            <input type="submit" class="btn btn-primary" value="Place Order">
                        </p>
                    </div>
                </div>
            </div>
            </form>
        </div>

    </div>
</div>