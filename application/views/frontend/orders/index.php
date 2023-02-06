<div id="fh5co-contact">
    <div class="container">
        <?php if ($this->session->flashdata('headMsg') !== null) { ?>
        <h2 class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('headMsg'); ?>
        </h2>
        <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('msg'); ?>
        </div>
        <?php } ?>
        <!-- <?php if ($this->session->flashdata('msg') !== null) { ?>
        <div class="alert alert-success" role="alert">
        </div>
        <?php } ?> -->
        <?php if ($this->session->flashdata('error') !== null) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
        <?php } ?>
    </div>
</div>