<?php $title='Login'; include 'includes/header.php'; if($_SERVER['REQUEST_METHOD']==='POST'&&db()){ $s=db()->prepare('SELECT * FROM customers WHERE email=?');$s->execute([trim($_POST['email'])]);$u=$s->fetch();if($u&&password_verify($_POST['password'],$u['password'])){$_SESSION['customer_id']=$u['id'];$_SESSION['customer_name']=$u['name'];flash('success','Welcome back, '.$u['name'].'!');header('Location:index.php');exit;}flash('error','Invalid email or password.');} ?>
<div class="formBox">
<h2>Customer Login</h2>
<form method="post">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button class="btn">Login</button>
</form>
<p>New customer? <a href="register.php">Create account</a>
</p>
</div>
<?php include 'includes/footer.php'; ?>
