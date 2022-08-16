<?php
include "../../../inc/database.php";
if(isset($_POST['slug'])){
    $blog_title=$_POST['blog_title'];
    $slug=$_POST['slug'];
    $meta_title=$_POST['meta_title'];
    $meta_tag=$_POST['meta_tag'];
    $meta_desc=$_POST['meta_desc'];
    $image=$_FILES['og_img'];

    $image_extension=pathinfo(basename("../../../upload/blog/".$image['name']),PATHINFO_EXTENSION);
    $og_img=rand().".".$image_extension;
    $img=move_uploaded_file($image['tmp_name'],"../../../upload/blog/".$og_img);
   
    $category=$_POST['category'];
    $blog_desc=$_POST['blog_desc'];

    $blog_img=$_FILES['blog_main_img'];
    $prod_img_extention=pathinfo(basename("../../../upload/blog/".$blog_img['name']),PATHINFO_EXTENSION);
    $prod_img=rand().".".$prod_img_extention;
    $prod_image=move_uploaded_file($blog_img['tmp_name'],"../../../upload/blog/".$prod_img);
  


 $ins=$db->query("INSERT INTO `blog`(`id`, `blog_title`, `slug`, `meta_title`, `meta_tag`, `meta_desc`, `og_img`, `category`, `blog_desc`, `blog_main_img`) VALUES (NULL,'$blog_title','$slug','$meta_title','$meta_tag','$meta_desc','$og_img','$category','$blog_desc','$prod_img')");

    }else{ echo 'Data not found';}

    header("Location:../../../manage_blog.php");



