<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet"  href="css/styleadmin.css">
</head>
<body>
    <h1 class="title_admin">welcome</h1>
    <div class="wrapper" >
    <?php
    include("config/config.php");
    include("modules/header.php");
    include("modules/menu.php");
    include("modules/main.php");
    include("modules/footer.php");
?>
    </div>
</body>
</html>