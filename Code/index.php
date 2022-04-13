<?  include 'setup.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <? include "head.php" ?>
  <body>
  
  <div class="site-wrap">
   <? include "header.php" ?>

    <div class="site-blocks-cover" style="background-image: url(images/hero_2.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center ">
          <div class="col-8 offset-2 text-center text-md-left pt-5 pt-md-0 overlay">
            <h1 class="mb-2 text-white text-center pt-3">Online Supermarket</h1>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4 text-white text-center">Buy your groceries online and have it
              delivered directly to your home!</p>
              <p class="text-center">
                <a href="products.php" class="btn btn-sm btn-primary">See all products</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Shipping</h2>
              <p>We deliver to your door within 24 hours without any additional cost for
              purchases above $30.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Weekly deals</h2>
              <p>Visit our website and check our weekly deals for a big variety or products.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Customer Support</h2>
              <p>A dedicated customer service team to answer all your questions
              via email or phone.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <? include "weekly_deals.php" ?>
    <? include "footer.php" ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
