<?php
include "../../../inc/database.php";
if(isset($_POST['slug'])){
    $jobs_title=$_POST['jobs_title'];
    $slug=$_POST['slug'];
    $meta_title=$_POST['meta_title'];
    $meta_tag=$_POST['meta_tag'];
    $meta_desc=$_POST['meta_desc'];
    $image=$_FILES['og_img'];

    $image_extension=pathinfo(basename("../../../upload/jobs/".$image['name']),PATHINFO_EXTENSION);
    $og_img=rand().".".$image_extension;
    $img=move_uploaded_file($image['tmp_name'],"../../../upload/jobs/".$og_img);
   
    $category=$_POST['category'];
    $jobs_desc=$_POST['jobs_desc'];

    $jobs_img=$_FILES['jobs_main_img'];
    $prod_img_extention=pathinfo(basename("../../../upload/jobs/".$jobs_img['name']),PATHINFO_EXTENSION);
    $prod_img=rand().".".$prod_img_extention;
    $prod_image=move_uploaded_file($jobs_img['tmp_name'],"../../../upload/jobs/".$prod_img);
 
 $ins=$db->query("INSERT INTO `jobs`(`id`, `jobs_title`, `slug`, `meta_title`, `meta_tag`, `meta_desc`, `og_img`, `category`, `jobs_desc`, `jobs_main_img`) VALUES (NULL,'$jobs_title','$slug','$meta_title','$meta_tag','$meta_desc','$og_img','$category','$jobs_desc','$prod_img')");

    }else{ echo 'Data not found';}

    header("Location:../../../manage_jobs.php");



