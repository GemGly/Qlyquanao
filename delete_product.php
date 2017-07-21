<?php
    //lấy định danh
    $id_product = $_POST['id_product'];
    $id_category = $_POST['id_category'];
    echo $id_product."</br>";
    echo $id_category;

    //xóa sản phẩm
    require('database.php');
    $query = "DELETE FROM product WHERE id_product = '$id_product'";
    $db->exec($query);
    echo $query;
    //hiển thị trang product list
   header('Location: index.php');
?>