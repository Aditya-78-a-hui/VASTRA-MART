<?php requireLogin(); $title='Checkout'; include 'includes/header.php'; $items=[];$total=0;foreach(cart() as $code=>$qty){$p=productByCode($code);if($p){$sub=$p['price']*$qty;$total+=$sub;$items[]=[$p,$qty];}} if(!$items){echo '<div class="formBox">
<h2>Cart is empty</h2>
<a class="btn" href="products.php">Shop Products</a>
</div>';include 'includes/footer.php';exit;} ?>
<div class="formBox">
<h2>Checkout</h2>
<form method="post" action="place_order.php">
<input name="name" value="<?=e($_SESSION['customer_name']??'')?>" placeholder="Full name" required>
<input name="phone" placeholder="Phone" required>
<textarea name="address" placeholder="Delivery address" required>
</textarea>
<select name="payment" required>
<option>Cash on Delivery</option>
<option>UPI (Demo)</option>
<option>Debit/Credit Card (Demo)</option>
<option>Net Banking (Demo)</option>
</select>
<h3>Total: <?=money($total)?>
</h3>
<button class="btn">Place Order</button>
</form>
</div>
<?php include 'includes/footer.php'; ?>
