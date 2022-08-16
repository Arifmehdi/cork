<?php
include "../../../inc/database.php";
$prod_id=$_GET['id'];
$db->query("DELETE FROM `jobs_team` WHERE id=$prod_id");
header("Location:../../../manage_jobs_team.php");