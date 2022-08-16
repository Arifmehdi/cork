<?php
include "../../../inc/database.php";
if($_POST['slug']){
$team_name=$_POST['team_name'];
$team_desc=$_POST['team_desc'];

$role_icon=$_FILES['team_icon'];
$image=pathinfo(basename("../../../upload/jobs/".$role_icon['name']),PATHINFO_EXTENSION);
$icon=rand().".".$image;
$img=move_uploaded_file($role_icon['tmp_name'],'../../../upload/jobs/'.$icon);

$slug=$_POST['slug'];
$meta_title=$_POST['meta_title'];
$meta_tag=$_POST['meta_tag'];
$meta_desc=$_POST['meta_desc'];

$og_img=$_FILES['og_img'];
$og_image_ext=pathinfo(basename("../../../upload/jobs/".$og_img['name']),PATHINFO_EXTENSION);
$og_image=rand().".".$og_image_ext;
$og_imge=move_uploaded_file($og_img['tmp_name'],'../../../upload/jobs/'.$og_image);


$d=$db->query("INSERT INTO `jobs_team`(`id`, `team_name`, `team_desc`, `team_icon`, `slug`, `meta_title`, `meta_tag`, `meta_desc`, `og_img`) VALUES (NULL,'$team_name','$team_desc','$icon','$slug','$meta_title','$meta_tag','$meta_desc','$og_image')");
$db->close();
header("Location:../../../manage_jobs_team.php");
}
