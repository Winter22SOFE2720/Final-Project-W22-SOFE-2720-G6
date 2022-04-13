<?
//  $stock = [0, 50, 50, 50, 50, 4, 0];
//  setcookie("stock", json_encode($stock));

  $stock = $_COOKIE["stock"];
  $cart = $_COOKIE["cart"];

  if (empty($cart)) {
    $cart = [0, 0, 0, 0, 0, 0, 0];
    setcookie("cart", json_encode($cart));
  } else {
    $cart = json_decode($cart);
  }

  if (empty($stock)) {
    $stock = [0, 50, 50, 50, 50, 4, 50];
    setcookie("stock", json_encode($stock));
  } else {
    $stock = json_decode($stock);
  }

  $items = 0;
  foreach ($cart as $item) {
    if ($item > 0) {
      $items++;
    }
  }

  include "db.php";
?>
