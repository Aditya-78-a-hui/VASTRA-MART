<?php require 'includes/functions.php'; $title='Feedback'; if($_SERVER['REQUEST_METHOD']==='POST'&&db()){db()->prepare('INSERT INTO feedback(customer_name,rating,text) VALUES(?,?,?)')->execute([trim($_POST['name']),max(1,min(5,(int)$_POST['rating'])),trim($_POST['text'])]);flash('success','Thank you for your feedback.');header('Location:feedback.php');exit;} include 'includes/header.php';$rows=db()?db()->query('SELECT * FROM feedback ORDER BY id DESC LIMIT 20')->fetchAll():[]; ?>
<section class="section">
<div class="formBox">
<h2>⭐ Customer Feedback</h2>
<form method="post">
<input name="name" placeholder="Your name" required>
<select name="rating">
<option value="5">★★★★★ 5</option>
<option value="4">★★★★ 4</option>
<option value="3">★★★ 3</option>
<option value="2">★★ 2</option>
<option value="1">★ 1</option>
</select>
<textarea name="text" placeholder="Write your feedback" required>
</textarea>
<button class="btn">Submit Feedback</button>
</form>
</div>
<div class="card">
<div class="pad">
<h2>Recent Feedback</h2>
<?php foreach($rows as $r): ?>
<p>
<b>
<?=e($r['customer_name'])?>
</b> — <?=str_repeat('★',(int)$r['rating'])?>
<br>
<?=e($r['text'])?>
</p>
<hr>
<?php endforeach; ?>
</div>
</div>
</section>
<?php include 'includes/footer.php'; ?>
