<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 07</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="form_area">
<?php
        $color = array(
            "color" => array("a" => "Red", "b" => "Green", "c" => "White"),
            "numbers" => array(1, 2, 3, 4, 5, 6),
            "holes" => array("First", 5 => "Second", "Third")
        );
        echo $color["holes"][5] . "\n"; // prints "second"
        echo $color["color"]["a"] . "\n"; // prints "Red"
        ?>
</div>


<script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/46f35fbc02.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>