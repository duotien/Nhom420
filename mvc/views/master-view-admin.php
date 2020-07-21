<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require_once "./mvc/views/blocks/head-admin.html"; ?>

    </head>


    <body class="animsition">
        <div class="page-wrapper">
            <?php require_once "./mvc/views/blocks/header-admin.php"; ?>
            <?php require_once "./mvc/views/pages/" . $data["Page"] . ".php"; ?>
            <?php require_once "./mvc/views/blocks/footer-admin.php"; ?>
        </div>
    </body>

</html>