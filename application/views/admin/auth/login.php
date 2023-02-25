<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                        <div class="card-body">
                            <form action="<?=base_url('admin/dashboard')?>" method="POST">
                                <span class="text-danger">
                                    <?php echo $this->session->flashdata('msg'); ?>
                                </span>
                                <div class="form-group">
                                    <label class="small mb-1 font-weight-bolder" for="inputEmailAddress">Email
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                                    <span class="text-danger emailErrorMsg"></span>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1 font-weight-bolder" for="inputPassword">Password
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" />
                                    <span class="text-danger passwordErrorMsg"></span>
                                </div>
                                <div class="form-group" style="float: right">
                                    <button type="submit"  class="btn btn-primary" id="login">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Fform validation -->

<script>
    $(document).ready(function() {
        $("#login").click(function(){
            var check = true;
            var email = $('#inputEmailAddress').val();
            var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

            var password = $('#inputPassword').val();
            
            if(!email){
                check = false;
                $(".emailErrorMsg").html("Enter your email address.");
            }else if(!pattern.test(email)){
                check = false;
                $(".emailErrorMsg").html('Please enter valid email address.');
            }

            if(!password){
                check = false;
                $(".passwordErrorMsg").html("Enter your email address.");
            }
            return check;
        })
    });

</script>