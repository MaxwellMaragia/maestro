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
    <section>
      <div class="container">
        <h1 class="mt-5">Bootstrap(ious) 4 Boilerplate</h1>
        <p>This is a sample content.</p>
      </div>
      <div class="container">
        <div class="jumbotron">
          <h1>Kitchen Sink</h1>
          <p>A quick preview of everything Bootstrap has to offer.</p>
          <p><a href="#" class="btn btn-primary btn-large">Learn more »</a> <a href="#" class="btn btn-outline-primary btn-large">Learn more »</a></p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div id="headings" class="card mb-4">
              <div class="card-header">Headings</div>
              <div class="card-body">
                <h1 class="page-header">Page Header<small>With Small Text</small></h1>
                <h1>This is an h1 heading</h1>
                <h2>This is an h2 heading</h2>
                <h3>This is an h3 heading</h3>
                <h4>This is an h4 heading</h4>
                <h5>This is an h5 heading</h5>
                <h6>This is an h6 heading</h6>
              </div>
            </div>
            <div id="tables" class="card mb-4">
              <div class="card-header">Tables</div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Tables</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Michael</td>
                      <td>Are formatted like this</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Lucille</td>
                      <td>Do you like them?</td>
                    </tr>
                    <tr class="success">
                      <td>3</td>
                      <td>Success</td>
                      <td></td>
                    </tr>
                    <tr class="danger">
                      <td>4</td>
                      <td>Danger</td>
                      <td></td>
                    </tr>
                    <tr class="warning">
                      <td>5</td>
                      <td>Warning</td>
                      <td></td>
                    </tr>
                    <tr class="active">
                      <td>6</td>
                      <td>Active</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-striped table-bordered table-condensed">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Tables</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Michael</td>
                      <td>This one is bordered and condensed</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Lucille</td>
                      <td>Do you still like it?</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div id="content-formatting" class="card mb-4">
              <div class="card-header">Content Formatting</div>
              <div class="card-body">
                <p class="lead">This is a lead paragraph.</p>
                <p>This is an <b>ordinary paragraph</b> that is <i>long enough</i> to wrap to 
                  <u>multiple lines</u> so that you can see how the line spacing looks.
                </p>
                <p class="text-muted">Muted color paragraph.</p>
                <p class="text-warning">Warning color paragraph.</p>
                <p class="text-danger">Danger color paragraph.</p>
                <p class="text-info">Info color paragraph.</p>
                <p class="text-primary">Primary color paragraph.</p>
                <nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item active"><span class="page-link">2<span class="sr-only">(current)</span></span></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                  </ul>
                </nav>
                <p><small>This is text in a <code>small</code> wrapper. <abbr title="No Big Deal">NBD</abbr>, right?</small></p>
                <hr>
                <address><strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br><abbr title="Phone">P:</abbr> (123) 456-7890</address>
                <address class="col-6"><strong>Full Name</strong><br><a href="mailto:#">first.last@example.com</a></address>
                <hr>
                <blockquote>Here's what a blockquote looks like in Bootstrap.<small>Use <code>small</code> to identify the source.</small></blockquote>
                <hr>
                <div class="row">
                  <div class="col-xs-6">
                    <ul>
                      <li>Normal Unordered List</li>
                      <li>Can Also Work
                        <ul>
                          <li>With Nested Children</li>
                        </ul>
                      </li>
                      <li>Adds Bullets to Page</li>
                    </ul>
                  </div>
                  <div class="col-xs-6">
                    <ol>
                      <li>Normal Ordered List</li>
                      <li>Can Also Work
                        <ol>
                          <li>With Nested Children</li>
                        </ol>
                      </li>
                      <li>Adds Bullets to Page</li>
                    </ol>
                  </div>
                </div>
                <hr>
                <pre>\nfunction preFormatting() {  // looks like this;  var something = somethingElse;  return true;}                        </pre>
              </div>
            </div>
          </div>
        </div>
        <div id="forms" class="card mb-4">
          <div class="card-header">Forms</div>
          <div class="card-body">
            <form>
              <fieldset>
                <legend>Legend</legend>
                <div class="form-group">
                  <label for="exampleInputEmail">Email address</label>
                  <input id="exampleInputEmail" type="text" placeholder="Enter email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <input id="exampleInputPassword" type="password" placeholder="Password" class="form-control">
                </div>
                <div class="form-check form-group">
                  <input id="checkbox-1" type="checkbox" class="form-check-input">
                  <label for="checkbox-1" class="form-check-label">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </fieldset>
            </form>
            <hr class="my-5">
            <form class="form-inline">
              <input type="text" placeholder="Email" class="form-control mb-2 mr-sm-2">
              <label for="inlineFormInputGroupUsername2" class="sr-only">Username</label>
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">@</div>
                </div>
                <input id="inlineFormInputGroupUsername2" type="text" class="form-control">
              </div>
              <div class="form-check mb-2 mr-sm-2">
                <input id="inlineFormCheck" type="checkbox" class="form-check-input">
                <label for="inlineFormCheck" class="form-check-label">Remember me</label>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
            <hr class="my-5">
            <h4 class="mb-5">Horizontal form</h4>
            <form>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input id="inputEmail3" type="email" placeholder="Email" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input id="inputPassword3" type="password" placeholder="Password" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-form-label col-sm-2 pt-0">Radios</div>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input id="gridRadios1" type="radio" name="gridRadios" value="option1" checked="" class="form-check-input">
                      <label for="gridRadios1" class="form-check-label">First radio</label>
                    </div>
                    <div class="form-check">
                      <input id="gridRadios2" type="radio" name="gridRadios" value="option2" class="form-check-input">
                      <label for="gridRadios2" class="form-check-label">Second radio</label>
                    </div>
                    <div class="form-check disabled">
                      <input id="gridRadios3" type="radio" name="gridRadios" value="option3" disabled="" class="form-check-input">
                      <label for="gridRadios3" class="form-check-label">Third disabled radio</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2">Checkbox</div>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input id="gridCheck1" type="checkbox" class="form-check-input">
                    <label for="gridCheck1" class="form-check-label">Example checkbox</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">                                   
                <div class="col-sm-2">Custom Checkbox</div>
                <div class="col-sm-10">
                  <div class="custom-control custom-checkbox">
                    <input id="customCheck1" type="checkbox" class="custom-control-input">
                    <label for="customCheck1" class="custom-control-label">Check this custom checkbox</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">                                   
                <div class="col-sm-2">Custom Radio</div>
                <div class="col-sm-10">
                  <div class="custom-control custom-radio">
                    <input id="customRadio1" type="radio" name="customRadio" class="custom-control-input">
                    <label for="customRadio1" class="custom-control-label">Toggle this custom radio</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input id="customRadio2" type="radio" name="customRadio" class="custom-control-input">
                    <label for="customRadio2" class="custom-control-label">Or toggle this other custom radio</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="buttons" class="card">
          <div class="card-header">Buttons</div>
          <div class="card-body">
            <p>
              <button type="button" class="btn btn-lg btn-secondary">Default Lg</button>
              <button type="button" class="btn btn-lg btn-primary">Primary</button>
              <button type="button" class="btn btn-lg btn-success">Success</button>
              <button type="button" class="btn btn-lg btn-info">Info</button>
              <button type="button" class="btn btn-lg btn-warning">Warning</button>
              <button type="button" class="btn btn-lg btn-danger">Danger</button>
              <button type="button" class="btn btn-lg btn-link">Link</button>
            </p>
            <p>
              <button type="button" class="btn btn-secondary">Default </button>
              <button type="button" class="btn btn-primary">Primary</button>
              <button type="button" class="btn btn-success">Success</button>
              <button type="button" class="btn btn-info">Info</button>
              <button type="button" class="btn btn-warning">Warning</button>
              <button type="button" class="btn btn-danger">Danger</button>
              <button type="button" class="btn btn-link">Link</button>
            </p>
            <p>
              <button type="button" class="btn btn-sm btn-secondary">Default Sm</button>
              <button type="button" class="btn btn-sm btn-primary">Primary</button>
              <button type="button" class="btn btn-sm btn-success">Success</button>
              <button type="button" class="btn btn-sm btn-info">Info</button>
              <button type="button" class="btn btn-sm btn-warning">Warning</button>
              <button type="button" class="btn btn-sm btn-danger">Danger</button>
              <button type="button" class="btn btn-sm btn-link">Link</button>
            </p>
          </div>
        </div>
        <div class="card">
          <div class="card-header">Button dropdown</div>
          <div class="card-body">
            <div class="dropdown">
              <button id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-secondary dropdown-toggle">Dropdown button</button>
              <div aria-labelledby="dropdownMenuButton" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a><a href="#" class="dropdown-item">Something else here</a></div>
            </div>
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