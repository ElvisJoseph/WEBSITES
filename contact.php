$_SESSION['Email'] = $_POST['Email'];
session_start();
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (isset($_POST['submit'])) {
        # code...
        if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill out all fields";
    } else {
        mailto:("");
    }
    }
    else {
        header("Location: Contact.php");
        die();
    }
    
?>
