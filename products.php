<?php $title='Products'; include 'includes/header.php'; $ps=products($_GET['category']??null,$_GET['q']??null); ?>
<section class="section">
<div class="sectionHead">
<h2>All Products</h2>
<span class="muted">
<?=count($ps)?> products</span>
</div>
<div class="grid">
<?php foreach($ps as $p): ?>
<article class="card">
<img src="<?=e($p['image'])?>" onerror="this.src='assets/img-placeholder.svg'">
<div class="pad">
<small class="muted">
<?=e($p['category_name'])?>
</small>
<h3>
<?=e($p['name'])?>
</h3>
<p class="muted">
<?=e($p['description'])?>
</p>
<div class="price">
<?=money($p['price'])?>
</div>
<p class="muted">Stock: <?=e($p['stock'])?>
</p>
<a class="btn" href="add_to_cart.php?id=<?=e($p['code'])?>">Add to Cart</a>
</div>
</article>
<?php endforeach; ?>
</div>
</section>
<?php include 'includes/footer.php'; ?>
