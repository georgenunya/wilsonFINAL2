<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="/images/favi.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
    rel="stylesheet"
  />
    <title>Contact Us</title>
</head>
<body>

    <!-- Navbar -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-blue text-white fixed-top">
            <a class="mx-auto d-block imagesize" href="index.html">
                <img src="/images/150.png" alt="">
              </a>
            <div class="container-fluid justify-content-center">

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list text-white"></span>
              </button>
              <div class="collapse navbar-collapse right" id="navbarNavDropdown">
                <ul class="navbar-nav text-center ms-auto">
                  <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="digitaldesign.html">Digital Design</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="portfolio.html">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="contact.php">Contact</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
    </header>


<!-- 1st about paragraph section -->
<section class="infosection p-3 paddingtop">
    <div class="container">
        <div class="row text-center g-4">

            <!-- about one -->

            <div class="col-md">
                <div class="text-dark">
                    <div class="card-body text-center">
                        <h1 class="h1bottom">We’re here to help!</h1>
                        <h4 class="card-title mb-3">
                            Fill out our form with as much information as possible to ensure our team can help you in the best way possible.

                        </h4>
                        <p class="card-text">
                            <a href="privacy.html">See our privacy policy for how we use your data. </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    
</section>
<!-- end -->


<div class="container mt-5 text-center mb-5">
    <h1>Contact Us</h1>
    <form class="row g-3" action="contactform.php" method="post">



  <div class="elem-group col-md-6">
    <label class="form-label" for="name">Your Name</label>
    <input class="form-control" type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>



  <div class="elem-group col-md-6">
    <label class="form-label" for="email">Your E-mail</label>
    <input class="form-control" type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
  </div>



  <div class="elem-group">
    <label class="form-label" for="department-selection">Choose Concerned Department</label>
    <select class="form-control" id="department-selection" name="concerned_department" required>
        <option value="">Select a Department</option>
        <option value="download">Download</option>
        <option value="billing">Billing</option>
        <option value="marketing">Marketing</option>
        <option value="enquiries">Enquiries</option>
        <option value="technical support">Technical Support</option>
    </select>
  </div>




  <div class="elem-group col-md-12">
    <label class="form-label" for="message">Write your message</label>
    <textarea class="form-control" rows="3" id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
  </div>



  <button class="btn btn-dark" type="submit">Send Message</button>
  <hr class="mb-4">
</form>
</div>





<!-- footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">  
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Socials</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Instagram</a>
              </li>
              <li>
                <a href="#!" class="text-white">Facebook</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Shortcuts</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="index.html" class="text-white">Home</a>
              </li>
              <li>
                <a href="digitaldesign.html" class="text-white">Digital Design</a>
              </li>
              <li>
                <a href="portfolio.html" class="text-white">Portfolio</a>
              </li>
              <li>
                <a href="contact.php" class="text-white">Contact</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Policies</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="privacy.html" class="text-white">Privacy Policy</a>
              </li>
              <li>
                <a href="copyright.html" class="text-white">Copyright Policy</a>
              </li>
              <li>
                <a href="termsofuse.html" class="text-white">Terms Of Use</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Company Services</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                Commercial
              </li>
              <li>
                Residential
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" href="https://nunyamarketing.com">Nunya Group</a>
    </div>
    <!-- Copyright -->
  </footer>







<!-- scripts -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
<script type="text/javascript">
document.addEventListener("contextmenu",function(NunyaDigital)
{
    NunyaDigital.preventDefault();
});
</script>
<script data-ad-client="ca-pub-1506924428061176" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>