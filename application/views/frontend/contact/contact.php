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
            <div class="col-md-5 col-md-push-1 animate-box">

                <div class="fh5co-contact-info">
                    <h3>Contact Information</h3>
                    <ul>
                        <!-- <li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
                        <li class="phone"><a href="tel://09898465725">+91 9898465725</a></li>
                        <li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                        <!-- <li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li> -->
                    </ul>
                </div>

            </div>
            <div class="col-md-6 animate-box">
                <h3>Get In Touch</h3>
                <form action="<?php echo base_url('contact'); ?>" method="POST">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="fname">First Name</label> -->
                            <input name="name" type="text" class="form-control" placeholder="Your Name" value="<?php echo set_value('name'); ?>" />
                        <?php echo form_error('name', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="lname">Last Name</label> -->
                            <input name="email" type="text" class="form-control" placeholder="Your Email" value="<?php echo set_value('email'); ?>" />
                            <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input name="subject" type="text" class="form-control" placeholder="Subject" value="<?php echo set_value('subject'); ?>" />
                            <?php echo form_error('subject', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"><?php echo set_value('message'); ?></textarea>
                            <?php echo form_error('message', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>