<!DOCTYPE html>
<html>
  <head>
    <?php include 'includes/head.php' ?>
  </head>
  <body>
    <!-- navbar-->
    <?php include 'includes/login_navbar.php' ?>
    <!-- Contact Section-->
    <section>
      <div class="container">
       
        <div class="row align-items-center mt-5">
          <div class="col-lg-2"> </div>
          <div class="col-lg-8">
            <header class="section-header">
          <h2 class="mb-2">Login</h2>
        </header>
            <form action="#" class="contact-form text-left">
              <div class="form-group mb-4">
                <label>Email<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="name" placeholder="e.g. John Smith" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Password<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="email" placeholder="name@company.com" class="form-control">
              </div>
             
              
              <div class="form-group">
                <input type="submit" value="Login" class="btn btn-primary">
              </div>
            </form>
          </div>
          <div class="col-lg-2"> </div>
          
        </div>
      </div>
    </section>
    
    
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/lightbox2/js/lightbox.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>