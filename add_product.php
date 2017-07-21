<?php
    //lấy dữ liệu về sản phẩm
    if (isset($_POST['id_category'])&& isset($_POST['code']) && isset($_POST['name_product']) && isset($_POST['price'])) {
        $id_category = $_POST['id_category'];
        $code = $_POST['code'];
        $name_product = $_POST['name_product'];
        $price = $_POST['price'];
    }
    else{
        echo "không hợp lệ";
    }
    //kiểm tra tính hợp lệ của dữ liệu
    if(empty($code)|| empty($name_product)|| empty($price)){
        $error = "Không hợp lệ";
        include ('error.php');
    } else{
        //nếu hợp lệ, thêm sản phẩm vào cơ sở dữ liệu
        require ('database.php');
        $query = "INSERT INTO product (code, name_product, price,id_category ) VALUES ('$code', '$name_product', '$price','$id_category')";
        $db->exec($query);

        header('Location: index.php');
    }
?>