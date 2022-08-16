<?php
include "../../../inc/database.php";
$prod_id=$_GET['id'];
$db->query("DELETE FROM `jobs_role` WHERE id=$prod_id");
header("Location:../../../manage_jobs_role.php");