<?  include 'setup.php' ?>
<!DOCTYPE html>
<html lang="en">
  <? include "head.php" ?>
  <? include "db.php" ?>
<?
  $id = $_GET["id"];
  $product = $products[$id];
?>
  <body>
  
  <div class="site-wrap">
   <? include "header.php" ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span
          class="mx-2 mb-0">/</span> <strong class="text-black"><?= $product['category'] ?></strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          <img src="images/<?= $product['image'] ?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
          <h2 class="text-black"><?= $product['name'] ?></h2>
          <p class="mb-4"><?= $product['description'] ?></p>
        <? if ($stock[$product['id']] == 0) { ?>
          <h5 class="text-danger">Item is not available</h5> 
       <? } else if ($stock[$product['id']] <= 5) { ?>
          <h4 class="mb-4 text-danger">Only <?= $stock[$product['id']] ?> left!</h4> 
        <? } ?>
 
          <p><strong class="text-primary h4">$ <?= $product['price'] ?> <?= $product['unit'] ?></strong></p>

        <? if ($stock[$product['id']] > 0) { ?>
            <div class="mb-5">
              <form action="add.php" method="POST">
              <input type="hidden" name="id" value="<?= $product['id'] ?>">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" name="add" value="1" placeholder="" aria-label="" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><input type="submit" class="buy-now btn btn-sm btn-primary" value="Add To Cart"></p>
            </form>

        <? } ?>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Weekly deals</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <img src="images/<?= $product['image'] ?>" alt="<?= $product['description'] ?>" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Avocado</a></h3>
                    <p class="mb-0">Fresh organic avocado</p>
                    <p class="text-primary font-weight-bold">$1.67 each</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/product_2.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Strawberries</a></h3>
                    <p class="mb-0">Fresh organic strawberies</p>
                    <p class="text-primary font-weight-bold">$2.47 / lb</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/product_3.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">2% Milk</a></h3>
                    <p class="mb-0">Natrel fine-filtered 2% milk</p>
                    <p class="text-primary font-weight-bold">$4.98</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/product_4.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Peanut butter</a></h3>
                    <p class="mb-0">Only peanuts smooth, all natural</p>
                    <p class="text-primary font-weight-bold">$5.77</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/product_5.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Superfries</a></h3>
                    <p class="mb-0">McCain sweet potato superfries</p>
                    <p class="text-primary font-weight-bold">$2.47</p>
                  </div>
                </div>
              </div>
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
