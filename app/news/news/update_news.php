<?php
include "../../../inc/database.php";

if(isset($_POST['slug'])){
    $id=$_POST['id'];
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

    $product_img=$_FILES['news_main_img'];
    $prod_img_extention=pathinfo(basename("../../../upload/news/".$product_img['name']),PATHINFO_EXTENSION);
    $prod_img=rand().".".$prod_img_extention;
    $prod_image=move_uploaded_file($product_img['tmp_name'],"../../../upload/news/".$prod_img);
    
    $ins=$db->query("UPDATE `news` SET `news_title`='$news_title',`slug`='$slug',`meta_title`='$meta_title',`meta_tag`='$meta_tag',`meta_desc`='$meta_desc',`og_img`='$og_img',`category`='$category',`news_desc`='$news_desc',`news_main_img`='$prod_img' WHERE id=$id");
    }else{ echo 'Data not found';}

    header("Location:../../../manage_news.php");

