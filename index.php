<?php $title='Home'; include 'includes/header.php'; ?>
<section class="hero">
<div>
<h1>Everything You Need<br>At <span>VASTRA MART</span>
</h1>
<p>Mobiles • Electronics • Fashion • Grocery • Home • Beauty • Sports & More</p>
<a class="btn primary" href="products.php">Shop Now →</a>
</div>
<div>
</div>
</section>
<section class="section">
<div class="sectionHead">
<h2>Top Products For You</h2>
<a href="products.php">View All →</a>
</div>
<div class="grid">
<?php foreach(array_slice(products(),0,8) as $p): ?>
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
<a class="btn" href="add_to_cart.php?id=<?=e($p['code'])?>">Add to Cart</a>
</div>
</article>
<?php endforeach; ?>
</div>
</section>
<section class="section stats">
<div class="stat">
<b>17</b>Categories</div>
<div class="stat">
<b>84+</b>Products</div>
<div class="stat">
<b>24×7</b>Website Access</div>
<div class="stat">
<b>1</b>Shopping Platform</div>
</section>
<section class="section card">
<div class="pad">
<h2>About VASTRA MART</h2>
<p>VASTRA MART is a customer-friendly e-commerce project based in Bhojuveer, Varanasi, Uttar Pradesh. It brings everyday shopping categories together in one easy-to-use website.</p>
<p>
<b>Owner:</b> Sandeep Thakur &nbsp; <b>Manager:</b> Shivam Thakur &nbsp; <b>Developer:</b> Er. Aditya Pandey</p>
</div>
</section>
<?php include 'includes/footer.php'; ?>
