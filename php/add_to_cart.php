<?php 

session_start();

$cnt = 0;
$item["id"]=$cnt;
$item["name"]=isset($_GET['name']) ? $_GET['name'] : "";;
$item["price"]=isset($_GET['price']) ? $_GET['price'] : "";
$item["path"]=isset($_GET['path']) ? $_GET['path'] : "";


if(!isset($_SESSION['cart_items'])){
	$_SESSION['total_items']=null;
	$_SESSION['total_price']=0;
    $_SESSION['cart_items'] = array(); 
}
else
{
	$cnt = (string)sizeof($_SESSION['cart_items']);
}

$_SESSION['cart_items'][$cnt]=$item;
$cnt++;
$_SESSION['total_price']+=$item["price"];
$_SESSION['total_items'] = (string)sizeof($_SESSION['cart_items']); 
 
echo json_encode($_SESSION['total_items']);
?>