<?
$cart = $_COOKIE["cart"];
$id = $_GET["id"];

if (empty($cart)) {
  $cart = [0, 0, 0, 0, 0, 0, 0];
} else {
  $cart = json_decode($cart);
}

$cart[$id] = 0;

setcookie("cart", json_encode($cart));

header('Location: ' . "/cart.php");

?>
