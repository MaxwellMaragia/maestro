<!DOCTYPE html>
<html>
  <head>
    <?php include 'includes/head.php' ?>
  </head>
  <body>
    <!-- navbar-->
    <?php include 'includes/navbar.php' ?>
    <!-- Login Modal-->
    <div id="login" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
      <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body p-4 p-lg-5">
            <form action="#" class="login-form text-left">
              <div class="form-group mb-4">
                <label>Email address</label>
                <input type="email" name="email" placeholder="name@company.com" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Password</label>
                <input type="password" name="password" placeholder="Min 8 characters" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" value="Login" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Section-->
    <section class="hero">
      <div class="container text-center">
        <!-- breadcrumb-->
        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html" class="animsition-link">Home</a></li>
            <li aria-current="page" class="breadcrumb-item active">Contact </li>
          </ol>
        </nav>
        <h1 class="hero-heading">Talk with our sales team</h1>
        <div class="row">
          <div class="col-lg-7 mx-auto">
            <p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section-->
    <section>
      <div class="container">
        <header class="section-header">
          <h2 class="mb-2">Fill out the form</h2>
          <p class="lead">Please submit your information and we will follow up with you as soon as possible.</p>
        </header>
        <div class="row align-items-center mt-5">
          <div class="col-lg-7">
            <form action="#" class="contact-form text-left">
              <div class="form-group mb-4">
                <label>Name<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="name" placeholder="e.g. John Smith" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Company Email<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="email" placeholder="name@company.com" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Subject<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="subject" placeholder="Briefly describe your question" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Now let's hear the details<sup class="text-primary">&#10033;</sup></label>
                <textarea name="message" placeholder="Let us know what you need" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send message" class="btn btn-primary">
              </div>
            </form>
          </div>
          <div class="col-lg-5 contact-details mt-5 mt-lg-0">
            <div class="box">
              <div class="icon d-flex align-items-end"><img src="img/placeholder.svg" alt="" class="img-fluid"></div>
              <h5>Address</h5>
              <p class="text-small font-weight-light">13/25 New Avenue, New Heaven, 45Y 73J, England, Great Britain</p>
            </div>
            <div class="box">
              <div class="icon d-flex align-items-end"><img src="img/technology.svg" alt="" class="img-fluid"></div>
              <h5>Call center</h5>
              <p class="text-small font-weight-light">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communicatio</p><strong class="text-muted">+33 555 444 333</strong>
            </div>
            <div class="box">
              <div class="icon d-flex align-items-end"><img src="img/multimedia.svg" alt="" class="img-fluid"></div>
              <h5>Electronic support</h5>
              <p class="text-small font-weight-light">Please feel free to write an email to us or to use our electronic ticketing system.</p>
              <ul class="text-left">
                <li><a href="mailto:info@fakeemail.com" class="text-small">info@fakeemail.com</a></li>
                <li><a href="#" class="text-small">Ticketio - our ticketing support platform </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CLients Section-->
    <section class="bg-gray">
      <div class="container">
        <div class="text-center">
          <h2>Trusted by teams everywhere</h2>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor incididunt..</p>
            </div>
          </div>
        </div>
        <div class="clients mt-5">
          <div class="row">
            <div class="col-lg-2"><img src="img/client-1.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="img/client-2.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="img/client-3.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="img/client-4.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="img/client-5.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="img/client-6.svg" alt="" class="client-image img-fluid"></div>
          </div>
        </div>
      </div>
    </section>
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 mb-5 mb-lg-0">
            <div class="footer-logo"><img src="img/logo-footer.svg" alt="..." class="img-fluid"></div>
          </div>
          <div class="col-lg-3 mb-5 mb-lg-0">
            <h5 class="footer-heading">Site pages</h5>
            <ul class="list-unstyled">
              <li> <a href="index.html" class="footer-link">Home</a></li>
              <li> <a href="faq.html" class="footer-link">FAQ</a></li>
              <li> <a href="contact.html" class="footer-link">Contact</a></li>
              <li> <a href="text.html" class="footer-link">Text Page</a></li>
            </ul>
          </div>
          <div class="col-lg-3 mb-5 mb-lg-0">
            <h5 class="footer-heading">Product</h5>
            <ul class="list-unstyled">
              <li> <a href="#" class="footer-link">Why Appton?</a></li>
              <li> <a href="#" class="footer-link">Enterprise</a></li>
              <li> <a href="#" class="footer-link">Blog</a></li>
              <li> <a href="#" class="footer-link">Pricing</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h5 class="footer-heading">Resources</h5>
            <ul class="list-unstyled">
              <li> <a href="#" class="footer-link">Download</a></li>
              <li> <a href="#" class="footer-link">Help Center</a></li>
              <li> <a href="#" class="footer-link">Guides</a></li>
              <li> <a href="#" class="footer-link">Partners</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
              <p class="copyrights-text mb-3 mb-lg-0">&copy; All rights reserved. Appton.co. Design by <a href="https://bootstrapious.com/landing-pages" class="external footer-link">Bootstrapious </a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              
            </div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="list-inline social mb-0">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook"></i></a><a href="#" class="social-link"><i class="fa fa-twitter"></i></a><a href="#" class="social-link"><i class="fa fa-youtube-play"></i></a><a href="#" class="social-link"><i class="fa fa-vimeo"></i></a><a href="#" class="social-link"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/lightbox2/js/lightbox.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>