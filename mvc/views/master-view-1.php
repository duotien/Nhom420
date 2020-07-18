<!DOCTYPE html>
<html lang="en">

    <head>
        <base href="http://localhost/Nhom420/public/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="./images/favicon.ico" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/responsive.css">
        <link rel="stylesheet" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <?php require_once "./mvc/views/blocks/header.php"; ?>
        <?php require_once "./mvc/views/pages/" . $data["Page"] . ".php"; ?>
        <?php require_once "./mvc/views/blocks/footer.php"; ?>
    </body>

</html>