<?php
include "../../../inc/database.php";

if(isset($_POST['slug'])){
    $id=$_POST['id'];
    $team_name=$_POST['team_name'];
    $team_desc=$_POST['team_desc'];

    $role_icon=$_FILES['team_icon'];
    $role_img=pathinfo(basename("../../../upload/jobs/".$role_icon['name']),PATHINFO_EXTENSION);
    $role_image=rand().".".$role_img;
    $r_img=move_uploaded_file($role_icon['tmp_name'],"../../../upload/jobs/".$role_image);

    $slug=$_POST['slug'];
    $meta_title=$_POST['meta_title'];
    $meta_tag=$_POST['meta_tag'];
    $meta_desc=$_POST['meta_desc'];

    $image=$_FILES['og_img'];
    $image_extension=pathinfo(basename("../../../upload/jobs/".$image['name']),PATHINFO_EXTENSION);
    $og_img=rand().".".$image_extension;
    $img=move_uploaded_file($image['tmp_name'],"../../../upload/jobs/".$og_img);

 
    

   
    $ins=$db->query("UPDATE `jobs_team` SET `team_name`='$team_name',`team_desc`='$team_desc',`team_icon`='$role_image',`slug`='$slug',`meta_title`='$meta_title',`meta_tag`='$meta_tag',`meta_desc`='$meta_desc',`og_img`='$og_img' WHERE id=$id");    

}else{ echo 'Data not found';}

    header("Location:../../../manage_jobs_team.php");

