<?php
include "../../../inc/database.php";
if(isset($_POST['slug'])){
    $news_title=$_POST['news_title'];
    $slug=$_POST['slug'];
    $meta_title=$_POST['meta_title'];
    $meta_tag=$_POST['meta_tag'];
    $meta_desc=$_POST['meta_desc'];
    $image=$_FILES['og_img'];

    $image_extension=pathinfo(basename("../../../upload/news/".$image['name']),PATHINFO_EXTENSION);
    $og_img=rand().".".$image_extension;
    $img=move_uploaded_file($image['tmp_name'],"../../../upload/news/".$og_img);
   
    $category=$_POST['category'];
    $news_desc=$_POST['news_desc'];

    $blog_img=$_FILES['news_main_img'];
    $prod_img_extention=pathinfo(basename("../../../upload/news/".$blog_img['name']),PATHINFO_EXTENSION);
    $prod_img=rand().".".$prod_img_extention;
    $prod_image=move_uploaded_file($blog_img['tmp_name'],"../../../upload/news/".$prod_img);
  


 $ins=$db->query("INSERT INTO `news`(`id`, `news_title`, `slug`, `meta_title`, `meta_tag`, `meta_desc`, `og_img`, `category`, `news_desc`, `news_main_img`) VALUES (NULL,'$news_title','$slug','$meta_title','$meta_tag','$meta_desc','$og_img','$category','$news_desc','$prod_img')");

    }else{ echo 'Data not found';}

    header("Location:../../../manage_news.php");



