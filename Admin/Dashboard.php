<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
session_start();
// Set session timeout duration (in seconds)
$timeout_duration = 300; // 5 minutes

// Check if the last activity timestamp is set
if (isset($_SESSION['LAST_ACTIVITY'])) {
    // Calculate the time elapsed since the last activity
    $time_elapsed = time() - $_SESSION['LAST_ACTIVITY'];

    // If the time elapsed exceeds the timeout duration, destroy the session
    if ($time_elapsed > $timeout_duration) {
        session_unset(); // Unset session variables
        session_destroy(); // Destroy the session
        header("Location: login.php"); // Redirect to login page
        exit();
    }
}

// Update the last activity timestamp
$_SESSION['LAST_ACTIVITY'] = time();
if (!isset($_SESSION['Username'])) {
    header("Location: login.php");
    die();
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 pl-0 sidebar">
            <div class="">
            <h4>Admin Dashboard</h4>
            <?php echo $_SESSION['Username']; ?>
                
            </div>
        </div>
    </div>
    

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-5Z5v0J6w6b8r1Zb2Tn8Zjp2rZv3V5Tz5"> </script>
</body>
</html>