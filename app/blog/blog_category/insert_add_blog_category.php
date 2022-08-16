<?php
include "../../../inc/database.php";
// print_r($db);
if(isset($_POST['slug'])){
    $category_name=$_POST['category_name'];
    $slug=$_POST['slug'];
    $meta_title=$_POST['meta_title'];
    $meta_tag=$_POST['meta_tag'];
    $meta_desc=$_POST['meta_desc'];

    $image=$_FILES['og_img'];
    $img_ext=pathinfo(basename("../../../upload/blog/".$image['name']),PATHINFO_EXTENSION);
    $img_rand=rand().".".$img_ext;
    $img=move_uploaded_file($image['tmp_name'],"../../../upload/blog/".$img_rand);
    
    $category=$_POST['category'];
 $ins=$db->query("INSERT INTO `blog_category`(`id`, `category_name`, `slug`, `meta_title`, `meta_tag`, `meta_desk`, `og_img`, `category`) VALUES (NULL,'$category_name','$slug','$meta_title','$meta_tag','$meta_desc','$img_rand','$category')");

}else{ echo 'Data not found';}

header("Location:../../../manage_blog_category.php");



