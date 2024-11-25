<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="home.css" />
</head>
<body>
    <?php
    session_start();
    include('../admincp/config/config.php');
    include("../page/header.php");
    include("pages/main.php");
    include("pages/footer.php");
    ?>
</body>
</html>