<?
$cart = $_COOKIE["cart"];
$id = $_POST["id"];
$add = $_POST["add"];
$change = $_POST["change"];

if (empty($cart)) {
  $cart = [0, 0, 0, 0, 0, 0, 0];
} else {
  $cart = json_decode($cart);
}

if ($change) {
  $cart[$id] = $change;
} else {
  $cart[$id] += $add;
}

setcookie("cart", json_encode($cart));

header('Location: ' . "/cart.php");
?>
