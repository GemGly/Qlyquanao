<?php
    require ('database.php');
    //lấy id category
    if(isset($_GET['id_category'])){
        $id_category = $_GET['id_category'];
    }
    else{
        $id_category =1;
    }
    //lấy tên của danh mục hiện thời
    $query = "SELECT * FROM category WHERE id_category= $id_category";
    $category = $db->query($query);
    $category = $category->fetch();
    $name_category =$category['name_category'];

    //lấy tất cả các danh mục
    $query = "SELECT * FROM category";
    $categories = $db->query($query);

    //lấy tất cả các sản phẩm cho danh mục đã chọn
    $query ="SELECT * FROM product WHERE id_category = $id_category";
    $products =$db->query($query);
?>