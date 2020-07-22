<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Men's, Women's shoes and sneakers</title>
        <script src="https://unpkg.com/js-image-zoom@0.4.1/js-image-zoom.js" type="application/javascript"></script>
        <?php require_once "./mvc/views/blocks/head.html"; ?>
        <link rel="stylesheet" href="./css/category.css">
        <link rel="stylesheet" href="./css/product.css">
        <link rel="stylesheet" href="./css/cart.css">
        <script  type="text/javascript" src="./js/jquery-1.8.3.min.js"></script>
        <script src="./js/jquery.elevatezoom-3.0.8.min.js" type="text/javascript"></script>
        <script src="./js/jquery.elevatezoom.js" type="text/javascript"></script>
    </head>

    <body>
        <?php require_once "./mvc/views/blocks/header.php"; ?>
        <?php require_once "./mvc/views/pages/" . $data["Page"] . ".php"; ?>
        <?php require_once "./mvc/views/blocks/chevron-up.html"; ?>
        <?php require_once "./mvc/views/blocks/footer.php"; ?>
    </body>

</html>