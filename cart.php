<?php $title='Cart'; include 'includes/header.php'; $items=[];$total=0; foreach(cart() as $code=>$qty){$p=productByCode($code);if($p){$sub=$p['price']*$qty;$total+=$sub;$items[]=[$p,$qty,$sub];}} ?>
<section class="section">
<h2>🛒 Shopping Cart</h2>
<div class="cart">
<?php if(!$items): ?>
<p>Your cart is empty.</p>
<?php else: ?>
<table class="table">
<tr>
<th>Product</th>
<th>Qty</th>
<th>Price</th>
<th>Subtotal</th>
<th>
</th>
</tr>
<?php foreach($items as [$p,$q,$s]): ?>
<tr>
<td>
<?=e($p['name'])?>
</td>
<td>
<form method="post" action="update_cart.php">
<input type="hidden" name="id" value="<?=e($p['code'])?>">
<input style="width:70px" type="number" name="qty" value="<?=$q?>" min="0" max="<?=$p['stock']?>">
<button class="btn">Update</button>
</form>
</td>
<td>
<?=money($p['price'])?>
</td>
<td>
<?=money($s)?>
</td>
<td>
<a href="remove_cart.php?id=<?=e($p['code'])?>">Remove</a>
</td>
</tr>
<?php endforeach; ?>
</table>
<div class="total">Total: <?=money($total)?>
</div>
<div style="text-align:right">
<a class="btn" href="checkout.php">Proceed to Checkout</a>
</div>
<?php endif; ?>
</div>
</section>
<?php include 'includes/footer.php'; ?>
