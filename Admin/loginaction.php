<?php
$Hostname = 'localhost';
$user = '';
$dbName= 'papa lucas';
$conn = new PDO($Hostname, $Password, $dbName);

// capture form inputs
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
// check if form is submitted
if(isset($_POST['submit'])){
    if($Username == "admin" && $Password == "admin"){
        session_start();
        $_SESSION['Username'] = $Username;
        header("location:dashboard");
    }
}

?>