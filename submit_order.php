<?php session_start();
include("admin/confs/config.php");
$name = $_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$address=$_POST['address'];
 
 mysqli_query($conn,"INSERT INTO orders (name,email,phone,address,status,created_date,modified_date) VALUES ('$name','$email','$phone','$address',0,NOW(),NOW())");
 $order_id=mysqli_insert_id($conn);
 foreach ($_SESSION['cart'] as $id => $qty) {
 	mysqli_query($conn,"INSERT INTO order_items(order_id,book_id,qty) VALUES ($order_id, $id,qty");
 }
unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Submitted</title>
</head>
<body>
<h1>Order Submitted</h1>
<div class="msg">
	Your order has been submitted.....
	<a href="index.php" class="done">Book Store Home</a>
</div>
<div class="footer">
	&copy; <?php echo date("Y")?>All right reserved
</div>
</body>
</html>









