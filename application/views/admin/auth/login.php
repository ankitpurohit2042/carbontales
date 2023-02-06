<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/dashboard') ?>" method="POST">
                                <?php echo $this->session->flashdata('msg');?>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" />
                                </div>
                                <!-- <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                        <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                    </div>
                                </div> -->
                                <div class="form-group" style="float: right">
                                    <button type="submit"  class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
        