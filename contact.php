<!-- Purpose: This file is used to send an email to the website owner when the user submits the contact form.
<?php
   
    if (isset($_POST['submit'])) {
        # code...
        if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill out all fields";
    } else {
        require 'vendor/autoload.php';
        $mail= new PHPMailer();
        //CAPTURING DETAILS FROM CONTACT FORM
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        //SMTP SERVER CONFIGURATION
        $mail-> SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.mailersend.net';
        $mail->SMTPAuth = true;
        //SMTP SERVER CONNECTION DETA
        $mail->Username = 'MS_U6uwVc@trial-pr9084z05vxlw63d.mlsender.net';
        $mail->Password = 'mssp.0zgZfbu.zr6ke4ne2p94on12.15gDOGF';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        //EMAIL DETAILS
        $mail->From=($email);
        $mail->FromName=$name;
        $mail->addAddress('amutwiri07@gmail.com');
        $mail->Subject=($subject);
        $mail->Body=$message;

    }
    }
    else {
        header("Location: Contact.php");
        die();
    }
    
?>
