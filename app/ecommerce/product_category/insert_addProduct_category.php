<?php
include "../../../inc/database.php";
if(isset($_POST['slug'])){
    $category_name=$_POST['category_name'];
    $slug=$_POST['slug'];
    $meta_title=$_POST['meta_title'];
    $meta_tag=$_POST['meta_tag'];
    $meta_desc=$_POST['meta_desc'];

    $og_img=$_FILES['og_img'];
    $og_img_ext=pathinfo(basename("../../../upload/ecommerce/".$og_img['name']),PATHINFO_EXTENSION);
    $og_img_rander=rand().".".$og_img_ext;
    $og_image=move_uploaded_file($og_img['tmp_name'],"../../../upload/ecommerce/".$og_img_rander);
    
    $category=$_POST['category'];
   
$ins=$db->query("INSERT INTO `product_category`(`id`, `category_name`, `slug`, `meta_title`, `meta_tag`, `meta_desk`, `og_img`, `category`) VALUES (NULL,'$category_name','$slug','$meta_title','$meta_tag','$meta_desc','$og_img_rander','$category')");

}else{ echo 'Data not found';}
mysqli_close($db);

header("Location:../../../manage_product_category.php");



