<?php $title='Register'; include 'includes/header.php'; if($_SERVER['REQUEST_METHOD']==='POST'&&db()){ $n=trim($_POST['name']);$email=trim($_POST['email']);$phone=trim($_POST['phone']);$pw=password_hash($_POST['password'],PASSWORD_DEFAULT);try{$s=db()->prepare('INSERT INTO customers(name,email,phone,password) VALUES(?,?,?,?)');$s->execute([$n,$email,$phone,$pw]);flash('success','Registration successful. Please login.');header('Location:login.php');exit;}catch(Throwable $e){flash('error','Email may already be registered.');}} ?>
<div class="formBox">
<h2>Create Account</h2>
<form method="post">
<input name="name" placeholder="Full name" required>
<input type="email" name="email" placeholder="Email" required>
<input name="phone" placeholder="Phone" required>
<input type="password" name="password" placeholder="Password" required minlength="6">
<button class="btn">Register</button>
</form>
<p>Already have an account? <a href="login.php">Login</a>
</p>
</div>
<?php include 'includes/footer.php'; ?>
