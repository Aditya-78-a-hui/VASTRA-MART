<?php require 'includes/functions.php'; unset($_SESSION['customer_id'],$_SESSION['customer_name']);flash('success','Logged out.');header('Location:index.php');
