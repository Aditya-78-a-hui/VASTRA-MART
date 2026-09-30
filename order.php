<?php requireLogin();$title='Invoice';include 'includes/header.php';$st=db()->prepare('SELECT * FROM orders WHERE id=? AND customer_id=?');$st->execute([$_GET['id']??0,$_SESSION['customer_id']]);$o=$st->fetch();if(!$o){echo '<div class="formBox">Order not found.</div>';include 'includes/footer.php';exit;}$it=db()->prepare('SELECT * FROM order_items WHERE order_id=?');$it->execute([$o['id']]);$items=$it->fetchAll(); ?>
<section class="section">
<div class="card">
<div class="pad">
<h2>VASTRA MART — Invoice #<?=$o['id']?>
</h2>
<p>
<b>Customer:</b>
<?=e($o['customer_name'])?> | <b>Phone:</b>
<?=e($o['phone'])?>
</p>
<p>
<b>Address:</b>
<?=e($o['address'])?>
</p>
<table class="table">
<tr>
<th>Product</th>
<th>Qty</th>
<th>Price</th>
<th>Subtotal</th>
</tr>
<?php foreach($items as $x): ?>
<tr>
<td>
<?=e($x['product_name'])?>
</td>
<td>
<?=$x['qty']?>
</td>
<td>
<?=money($x['price'])?>
</td>
<td>
<?=money($x['subtotal'])?>
</td>
</tr>
<?php endforeach; ?>
</table>
<div class="total">Total: <?=money($o['total'])?>
</div>
<button class="btn" onclick="window.print()">Print / Save PDF</button>
</div>
</div>
</section>
<?php include 'includes/footer.php'; ?>
