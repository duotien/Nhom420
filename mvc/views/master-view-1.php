<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="http://localhost/Nhom420/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <div id="header">
            <?php require_once "./mvc/views/blocks/header.php"; ?>
        </div>
        <div id="content">
            <?php require_once "./mvc/views/pages/" . $data["Page"] . ".php"; ?>
        </div>
        <div id="footer">
            <?php require_once "./mvc/views/blocks/footer.php"; ?>
        </div>
    </body>
</html>