<?php
// capture form inputs
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
// check if form is submitted
if(isset($_POST['submit'])){
    if($Username == "admin" && $Password == "admin"){
        session_start();
        $_SESSION['Username'] = $Username;
        header("location:dashboard");
    }
}

?>