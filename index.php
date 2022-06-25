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

    <form action="" class="form_area" id="form">

    <h3 >Ans To The Question Number: 3-4</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Password</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM user";
                    $results = mysqli_query($link, $sql);
                    // $row = mysqli_fetch_array($result);

                    while ($row = mysqli_fetch_array($results)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td>
                                <a href="edit-user.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a>
                            </td>
                            <td>
                                <a href="config.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>


    </form>



    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/46f35fbc02.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>