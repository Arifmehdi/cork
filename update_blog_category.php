<?php
include "inc/database.php";

if(isset($_POST['slug'])){
    $id=$_POST['id'];
    $category_name=$_POST['category_name'];
    $slug=$_POST['slug'];
    $meta_title=$_POST['meta_title'];
    $meta_tag=$_POST['meta_tag'];
    $meta_desc=$_POST['meta_desc'];

    $img=$_FILES['og_img'];
    $image=move_uploaded_file($img['tmp_name'],"upload/blog/".$img['name']);
    $image_ext=pathinfo(basename("upload/blog/".$img['name']),PATHINFO_EXTENSION);
    $og_img=rand().".".$image_ext;

    $category=$_POST['category'];

    $db->query("UPDATE `product_category` SET `category_name`='$category_name',`slug`='$slug',`meta_title`='$meta_title',`meta_tag`='$meta_tag',`meta_desk`='$meta_desc',`og_img`='$og_img',`category`='$category' WHERE id=$id");

}else{ echo 'Data not found';}

header("Location:manage_blog_category.php");
