<? include 'setup.php' ?>
<!DOCTYPE html>
<html lang="en">
  <body>
  <? include "head.php" ?>
  <? include "db.php" ?>

  <?
    $total = 0;
  ?>
  
  <div class="site-wrap">
   <? include "header.php" ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>

                  <? foreach ($cart as $id => $quantity) { ?>
                    <? if ($quantity == 0) continue; ?>
                    <? $total += $products[$id]['price'] * $quantity ?> 
                    <tr>
                      <td class="product-thumbnail">
                      <img src="images/<?= $products[$id]['image'] ?>" alt="Image" class="img-fluid">
                      </td>
                      <td class="product-name">
                        <h2 class="h5 text-black"><?= $products[$id]['name'] ?></h2>
                      </td>
                      <td>$<?= $products[$id]['price'] ?></td>
                      <td>
                        <div class="input-group mb-3" style="max-width: 120px; margin:0 auto;">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                          </div>
                          <input type="text" class="form-control text-center" id="<?= $id ?>" value="<?= $quantity ?>" placeholder="" aria-label="" aria-describedby="button-addon1">
                          <div class="input-group-append">
                            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                          </div>
                        </div>
                      </td>
                      <td>$<?= $products[$id]['price'] * $quantity ?></td>
                      <td><a href="remove.php?id=<?= $id ?>" class="btn btn-primary btn-sm">X</a></td>
                    </tr>
                  <? } ?>

                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
    <? if (false) { ?>
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block">Update Cart</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm">Apply Coupon</button>
              </div>
            </div>
<? } ?>
          </div>


          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                  <strong class="text-black">$<?= $total ?></strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$<?= $total ?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
                  </div>
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
