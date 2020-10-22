<?php
include("conf/config.php");

$id = $_GET['id'];
/* $oid = $_GET['oid']; */
$sql = "DELETE orders, order_items FROM orders INNER JOIN order_items  WHERE orders.id=$id AND orders.id=order_items.order_id";
/* $osql = "DELETE FROM order_items WHERE order_id=$oid";
mysqli_query($conn, $sql); */
mysqli_query($conn, $sql);
header("location: order-manage.php");
?>