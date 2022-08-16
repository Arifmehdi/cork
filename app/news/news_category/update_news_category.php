<?php
include "../../../inc/database.php";

if(isset($_POST['slug'])){
    $id=$_POST['id'];
    $category_name=$_POST['category_name'];
    $slug=$_POST['slug'];
    // $sell_price=$_POST['sell_price'];
    // $offer_price=$_POST['offer_price'];
    // $button_name=$_POST['button_name'];
    // $button_link=$_POST['button_link'];
    $meta_title=$_POST['meta_title'];
    $meta_tag=$_POST['meta_tag'];
    $meta_desc=$_POST['meta_desc'];

    $img=$_FILES['og_img'];
    $image_ext=pathinfo(basename("../../../upload/news/".$img['name']),PATHINFO_EXTENSION);
    $og_img=rand().".".$image_ext;
    $image=move_uploaded_file($img['tmp_name'],"../../../upload/news/".$og_img);
   
    

    $category=$_POST['category'];
    // $product_desc=$_POST['product_desc'];
    // $product_img=$_FILES['product_img'];

echo $ins=$db->query("UPDATE `news_category` SET `category_name`='$category_name',`slug`='$slug',`meta_title`='$meta_title',`meta_tag`='$meta_tag',`meta_desk`='$meta_desc',`og_img`='$og_img',`category`='$category' WHERE id=$id");

}else{ echo 'Data not found';}

header("Location:../../../manage_news_category.php");
