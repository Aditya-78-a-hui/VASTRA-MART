<?php requireLogin();$title='Orders';include 'includes/header.php';$st=db()->prepare('SELECT * FROM orders WHERE customer_id=? ORDER BY id DESC');$st->execute([$_SESSION['customer_id']]);$rows=$st->fetchAll(); ?>
<section class="section">
<h2>My Orders</h2>
<table class="table">
<tr>
<th>Order</th>
<th>Date</th>
<th>Total</th>
<th>Status</th>
<th>
</th>
</tr>
<?php foreach($rows as $r): ?>
<tr>
<td>#<?=e($r['id'])?>
</td>
<td>
<?=e($r['created_at'])?>
</td>
<td>
<?=money($r['total'])?>
</td>
<td>
<?=e($r['status'])?>
</td>
<td>
<a href="order.php?id=<?=$r['id']?>">View Invoice</a>
</td>
</tr>
<?php endforeach; ?>
</table>
</section>
<?php include 'includes/footer.php'; ?>
