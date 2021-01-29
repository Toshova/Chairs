<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="product-item">

        <?php
        require 'json.php';
        for ($row=0; $row<$arrLength; $row++){
            echo '<div class="product-list">
            <img src='.$products->product[$row]->img.'>
            <h3>'.$products->product[$row]->name.'</h3>
            <span class="price">'.$products->product[$row]->price.' ₽</span>
            <button onclick = "myFunc()" class="button">Купить</button>
            </div>
            ';
        }
        require 'modal.php';
        ?>

    <script src="script.js"></script>

</body>
</html>