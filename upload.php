<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Upload Successful</title>
</head>
<body>

    <!-- Navbar -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white fixed-top">
            <a class="mx-auto d-block" href="index.html">
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
                    <a class="nav-link text-white" href="portfolio.html">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="jobs.php">Job Opportunities</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="digitalart.html">Digital Architecture</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="motion.html">Motion Design</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
    </header><!-- hero section -->
<section class="hero-image3">
</section>
<!-- end of hero section -->

<!-- 1st about paragraph section -->
<section class="infosection p-3">
    <div class="container">
        <div class="row text-center g-4">

            <!-- about one -->

            <div class="col-md">
                <div class="text-dark">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-3">
                            Exciting Opportunities Await
                        </h4>
                        <p class="card-text">
                            A career at Wilson Building Contractors is truly a one-of-a-kind experience. It's more than working for a global community; it's an opportunity to be a part of something that impacts the world.
                            We have a strong tradition of growing people who have demonstrated the ability to deliver excellent results in different ways. 
                            The success of our company depends on every employee in the organization. Ultimately in our business, it is people who make the magic happen-with consumers, customers and the communities in which we work.
                            We believe our company should be as diverse as the markets we serve and as inclusive as our brands. This diversity allows us to understand and connect to the needs of our consumers and our customers everywhere we operate and to continue to innovate in everything we do. 
                            At Wilson Building Contractors you have the opportunity to work on teams with people who have different backgrounds and ideas and who work in offices across the globe. We are all unified by our love for the Company and desire to add value and make a difference.
                        </p>
                        <h5>Upload your CV below</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>

    
</section>
<!-- end -->
<section class="p-3 text-center">
<div class="container">
    <div class="row">
        <?php
        /* Get the name of the uploaded file */
        $filename = $_FILES['file']['name'];
        
        /* Choose where to save the uploaded file */
        $location = "upload/".$filename;
        
        /* Save the uploaded file to the local filesystem */
        if( move_uploaded_file($_FILES['file']['tmp_name'], $location)){
            echo '<p>File uploaded successfully</p>';
        }else{
            echo 'Error uploading file.';
        }
        
        
        
        
        ?>
    </div>

</div>

</section>






<!-- footer -->
<footer class="bg-light text-dark pt-5 footerborder">
            <div class="text-center text-md-left">
<div class="row text-center text-md-left">
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 paddingp">
        <h5 class="text-uppercase mb-4 font-weight-bold">
            About Us
        </h5>
        <hr class="mb-4">
        <p>Wilson Building Contractors is a design-oriented firm located in Wickford focused on high-end residential and commercial rendering projects. We use cutting-edge 3D rendering technologies to deliver realistic visualisations to our clients who approach us with their product drawings and sketches.</p>
        <hr class="mb-4">
    </div>

    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 paddingp">
        <h5 class="text-uppercase mb-4 font-weight-bold">
            Shortcuts
        </h5>
        <hr class="mb-4">
        <p>
            <a href="index.html" class="text-dark" style="text-decoration: none">Home</a>
        </p>
        <p>
            <a href="portfolio.html" class="text-dark" style="text-decoration: none">Portfolio</a>
        </p>
        <p>
            <a href="contact.php" class="text-dark" style="text-decoration: none">Contact Us</a>
        </p>
        <p>
            <a href="download.html" class="text-dark" style="text-decoration: none">Download Content</a>
        </p>
        <p>
            <a href="digitalart.html" class="text-dark" style="text-decoration: none">Digital Architecture</a>
        </p>
        <p>
            <a href="motion.html" class="text-dark" style="text-decoration: none">Motion Design</a>
        </p>
        <br>
        <p>
            <a href="copyright.html" class="text-dark" style="text-decoration: none">Copyright Policy</a>
        </p>
        <p>
            <a href="privacy.html" class="text-dark" style="text-decoration: none">Privacy Policy</a>
        </p>
        <p>
            <a href="termsofuse.html" class="text-dark" style="text-decoration: none">Terms Of Use</a>
        </p>
        <hr class="mb-4">
    </div>

    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 paddingp">
        <h5 class="text-uppercase mb-4 font-weight-bold">EARN REVENUE</h5>
        <hr class="mb-4">
        <p>
            <a href="contact.php" class="text-dark" style="text-decoration: none">Sell Products on Our Website</a>
        </p>
        <p>
            <a href="contact.php" class="text-dark" style="text-decoration: none">Advertise Your Products</a>
        </p>
        <p>
            <a href="contact.php" class="text-dark" style="text-decoration: none">Become An Affiliate</a>
        </p>
        <hr class="mb-4">
    </div>

    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 paddingp">
        <h5 class="text-uppercase mb-4 font-weight-bold">COMPANY SERVICES</h5>
        <hr class="mb-4">
        <p>
            Architectural visualisation
        </p>
        <p>
            Interior Rendering
        </p>
        <p>
            3D Modeling
        </p>
        <p>
            3D Animation | Walkthrough
        </p>
        <p>
            Architect | Design | CAD
        </p>
        <p>
            Virtual Reality Solutions for
        </p>
        <p>
            Architects
        </p>
        <p>
            Site Plan Rendering
        </p>
        <p>
            3D Floor Plan
        </p>
        <hr class="mb-4">
    </div>

    <div class="row d-flex justify-content-center">
        <div>
            <p>
                Copyright 2021 Nunya Group
            </p>
        </div>
    </div>

    <div class="row d-flex-justify-content-center">
        <div class="text-center">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <a href="#" class="text-dark">
                        <i class="bi-facebook"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="#" class="text-dark">
                        <i class="bi-twitter"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="https://www.instagram.com/nunyadigital/" class="text-dark">
                        <i class="bi-instagram"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="#" class="text-dark">
                        <i class="bi-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>



</div>
    </div>

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