<?
  include 'setup.php';
  foreach ($cart as $id => $quantity) {
    if ($quantity > 0) {
      $stock[$id] -= 1;
    }
  }

  $cart = [0, 0, 0, 0, 0, 0, 0];

  setcookie("cart", json_encode($cart));
  setcookie("stock", json_encode($stock));
  $items = 0;
?>
<!DOCTYPE html>
<html lang="en">
  <? include "head.php" ?>
  <body>
  
  <div class="site-wrap">
   <? include "header.php" ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Thank you!</h2>
            <p class="lead mb-5">You order was successfuly completed. Please
            wait for our confirmation email and estimated delivery date &amp;
            time.</p>
            <p><a href="products.php" class="btn btn-sm btn-primary">Back to
              supermarket</a></p>
          </div>
        </div>
      </div>
    </div>

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
