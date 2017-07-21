<?php
    include ('connect.php');
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
       <div id="main">
           <h1>Product List</h1>
           <div class="nav">
               <ul>
                   <?php foreach ($categories as $value): ?>
                   <li>
                       <a href="/qlquanao/?id_category=<?= $value['id_category'] ?>"><?= $value["name_category"] ?></a>
                   </li>
                   <?php endforeach; ?>
               </ul>
           </div>
       </div>
        <div id="content">
            <h2><?php echo $name_category ?></h2>
            <table>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['code'] ?></td>
                    <td><?= $product['name_product'] ?></td>
                    <td><?= $product['price']?></td>
                    <td>
                        <form action="delete_product.php" method="post" id="delete_product_form">
                            <input type="hidden" name="id_product" value="<?= $product['id_product'] ?>" />
                            <input type="hidden" name="id_category" value="<?= $product['id_category'] ?>" />
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>
