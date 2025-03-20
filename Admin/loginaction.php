<?php
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
if(isset($_POST['submit'])){
    if($Username == "admin" && $Password == "admin"){
        session_start();
        $_SESSION['Username'] = $Username;
        header("location:dashboard.php");
    }
}

?>