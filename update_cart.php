<?php require 'includes/functions.php'; $id=$_POST['id']??'';$q=max(0,(int)($_POST['qty']??1)); if($q===0)removeCart($id);else $_SESSION['cart'][$id]=$q;header('Location:cart.php');
