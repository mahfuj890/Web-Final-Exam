<?php
include('config.php');





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Lab Final</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <form action="config.php" method="POST" class="form_area">
        <div class="input_row">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </div>
        <div class="input_row">
            <label for="">Name</label>
            <input type="text" placeholder="Please Enter Name" value="<?php echo $name; ?>" name="name">
        </div>
        <div class="input_row">
            <label for="">Age</label>
            <input type="number" placeholder="Please Enter Name" value="<?php echo $age; ?>" name="age">
        </div>
        <div class="input_row">
            <label for="">User Name</label>
            <input type="text" placeholder="Please Enter Name" value="<?php echo $username; ?>" name="username">
        </div>
        <div class="input_row">
            <label for="">Password</label>
            <input type="password" placeholder="Please Enter Name" value="<?php echo $password; ?>" name="password">
        </div>


        <div class="input_row">
            <div>
                <button type="submit" class="submit_btn" name="update">Update</button>
            </div>
        </div>





    
    </form>



    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/46f35fbc02.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>