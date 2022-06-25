<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'webfinal');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// else{
//     echo "Connect Successfully";
// }


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($link, "DELETE FROM user WHERE id=$id");
	$_SESSION['message'] = "User deleted!";
	header('location: index.php');
}


if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($link, "SELECT * FROM user WHERE id=$id");
       $n = mysqli_fetch_array($record);
        $id = $n['id'];
        $name = $n['name'];
        $age = $n['age'];
        $username = $n['username'];
        $password = $n['password'];
    // if (count($record) == 1 ) {
    //     $n = mysqli_fetch_array($record);
    //     $name = $n['name'];
    //     $address = $n['address'];
    // }
}


if (isset($_POST['update'])) {

    $id =$_POST['id'];
    $name =$_POST['name'];
    $age =$_POST['age'];
    $username =$_POST['username'];
    $password =$_POST['password'];

	mysqli_query($link, "UPDATE user SET name='$name', age='$age' , username='$username' , password='$password' WHERE id=$id");
	$_SESSION['message'] = "User updated!";
	header('location: index.php');

}

?>