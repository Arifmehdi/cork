<?php
include "../../../inc/database.php";
$prod_id=$_GET['id'];
$db->query("DELETE FROM `blog_category` WHERE id=$prod_id");
header("Location:../../../manage_blog_category.php");