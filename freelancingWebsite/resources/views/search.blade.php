<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color:#f1f2f4;
            }
        </style>
    </head>
    <body class="antialiased">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light border-bottom my-2 py-2" style="font-size:large; font-weight: bold;">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 rounded-pill" style="width:200px" type="search" placeholder="Search" aria-label="Search">
                
                    </form>
                    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Find work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Messages</a>
                        </li>
                        </ul>
                        <img class="img-thumbnail " style="max-height:50px; max-width:80px" src="/img/findjob.jpg" alt="...">
                    </div>
                    </nav>
            </div>
            <div class="container mt-5">
                <div class="row p-4 rounded" style="background-color:white">

                
                        <div class="col-2">
                            <b><h2>Filter</h2></b>
                            <h6>Project Type</h6>
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1">Fixed Price</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2">Hourly Price</label><br>
                        </div>
                        <div class="col-10">
                            <div class="ps-2"><b>Results</b><br>
                                <div class="row border-bottom">
                                    <div class="col-10"><b><a href="asd">Make a ecommerce website</a></b></div>
                                    <div class="col-2">10,000 tk</div>
                                    <div class="col-10">dasdbkabdkabdasdasd</div>
                                    <div class="col-2">posted 12 hours ago</div>
                                    <div class="col-12">HTML, CSS, PHP </div>
                                </div>        
                                <div class="row border-bottom pt-2">
                                    <div class="col-10"><b><a href="asd">Make a Mobile app</a></b></div>
                                    <div class="col-2">1,00000 tk</div>
                                    <div class="col-10">Android app for huge company</div>
                                    <div class="col-2">posted 12 hours ago</div>
                                    <div class="col-12">Android </div>
                                </div> 
                           
                                <div class="row border-bottom pt-2">
                                    <div class="col-10"><b><a href="asd">Make a ecommerce website</a></b></div>
                                    <div class="col-2">10,000 tk</div>
                                    <div class="col-10">dasdbkabdkabdasdasd</div>
                                    <div class="col-2">posted 12 hours ago</div>
                                    <div class="col-12">HTML, CSS, PHP </div>
                                </div>  
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </body>


    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted mt-5">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>BD Freelancer
          </h6>
          <p>
            asdasdasd
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Dhaka, BD</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 0171</p>

        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="">BDFreelancer </a>
  </div>
  <!-- Copyright -->
</footer>
</html>
