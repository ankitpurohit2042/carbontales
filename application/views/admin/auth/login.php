<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Carbontales Admin <?php echo $title ? '- '.$title: '' ?></title>
      <link href="<?=base_url()?>assets/styles.css" rel="stylesheet" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
   </head>
   <body class="bg-primary1" style="background-image:url('http://carbontales.com/assets/frontend/images/slider/platinum2.jpg')">
      <div id="layoutAuthentication">
         <div id="layoutAuthentication_content">
            <main>
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                           <div class="card-header">
                              <h3 class="text-center font-weight-light my-4">Login</h3>
                           </div>
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
         <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
               <div class="container-fluid">
                  <div class="d-flex align-items-center justify-content-between small">
                     <div class="text-muted">Copyright &copy; Your Website 2020</div>
                     <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="<?=base_url()?>/assets/js/scripts.js"></script>
   </body>
</html>
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