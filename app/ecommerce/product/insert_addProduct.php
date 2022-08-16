<?php
include "../../../inc/database.php";
if(isset($_POST['slug'])){
    $category_name=$_POST['category_name'];
    $slug=$_POST['slug'];
    $sell_price=$_POST['sell_price'];
    $offer_price=$_POST['offer_price'];
    $button_name=$_POST['button_name'];
    $button_link=$_POST['button_link'];
    $meta_title=$_POST['meta_title'];
    $meta_tag=$_POST['meta_tag'];
    $meta_desc=$_POST['meta_desc'];
    $image=$_FILES['og_img'];

    $image_extension=pathinfo(basename("../../../upload/ecommerce/".$image['name']),PATHINFO_EXTENSION);
    $og_img=rand().".".$image_extension;
    $img=move_uploaded_file($image['tmp_name'],"../../../upload/ecommerce/".$og_img);
   
    $category=$_POST['category'];
    $product_desc=$_POST['product_desc'];

    $product_img=$_FILES['product_main_img'];
    $prod_img_extention=pathinfo(basename("../../../upload/ecommerce/".$product_img['name']),PATHINFO_EXTENSION);
    $prod_img=rand().".".$prod_img_extention;
    $prod_image=move_uploaded_file($product_img['tmp_name'],"../../../upload/ecommerce/".$prod_img);
    
    

 $ins=$db->query("INSERT INTO `product`(`id`, `category_name`, `slug`, `sell_price`, `offer_price`, `button_name`, `button_link`, `meta_title`, `meta_tag`, `meta_desc`, `og_img`, `category`, `prod_desc`, `prod_img`) VALUES (NULL,'$category_name','$slug','$sell_price','$offer_price','$button_name','$button_link','$meta_title','$meta_tag','$meta_desc','$og_img','$category','$product_desc','$prod_img')");

    }else{ echo 'Data not found';}

    header("Location:../../../manage_product.php");



