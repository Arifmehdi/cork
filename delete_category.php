<?php
include "inc/database.php";
$id=$_GET['id'];
$db->query("DELETE FROM product where id=$id");
header("Location:manage_product.php");
