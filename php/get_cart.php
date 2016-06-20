<?php
	session_start();


if(isset($_SESSION['cart_items'])){
	echo json_encode($_SESSION);
}
else
	echo "No items in cart added";
 

?>