<?php
include "../../../inc/database.php";
$prod_id=$_GET['id'];
$db->query("DELETE FROM `product_category` WHERE id=$prod_id");
header("Location:../../../manage_product_category.php");