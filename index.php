<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="images/site-icon.png" type="image/x-icon">
    <title>Barış Müftüoğlu</title>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <main>
        <?php
        $page = $_GET['page'];
        if ($page == "contact") {
            include "contact.php";
        } elseif ($page == "cv") {
            include "cv.php";
        } else {
            include "mainpage.php";
        }
        ?>
    </main>
    <?php
    include "footer.php";
    ?>
</body>

</html>