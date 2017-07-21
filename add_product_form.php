<?php
    require ('database.php');
    $query = 'SELECT * FROM category';
    $categories = $db->query($query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="site.css">
</head>
<body>
 <div id="page">
     <div id="header">
     <h1>Product Manager</h1>
     </div>
     <div id="main1">
     <h1>Add Product</h1>
     <form action="add_product.php" method="post" id="add_product_form">
         <label class="cate">Category:</label>
         <select name="id_category">
             <?php foreach ($categories as $category): ?>
             <option value="<?= $category['id_category']; ?>">
                 <?= $category['name_category']; ?>
             </option>
             <?php endforeach; ?>
         </select>
         <br/>
         <div class="content-item">
             <label>Code:</label>
             <input type="input" name="code" />
         </div>
         <div class="content-item">
            <label>Name:</label>
            <input type="input" name="name_product" />
         </div>
         <div class="content-item">
             <label>Price:</label>
             <input type="input" name="price" />
         </div>
         <input type="submit" value="Add Product" />
     </form>
     <p><a href="index.php">View Product List</a> </p>
     </div>
     <div id="footer">
         <p>$copy; <?php echo date("Y");?> My Guitar Shop, Inc.</p>
     </div>
 </div>
</body>
</html>