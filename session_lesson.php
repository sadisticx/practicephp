<?php
// Start the session to access session variables

// Initialize the "users" session array if it doesn't exist
// if(!isset($_SESSION["users"])){
//     $_SESSION["users"] = []; // Create an empty array for users in the session
// }

// // Add a sample user to the "users" session array
// array_push($_SESSION["users"], ["username" => "Mario", "password" => "123456"]);

// // Output the current session data for debugging
// echo "<pre>";
// print_r($_SESSION); // Print all session variables
// echo "</pre>";
?>









<?php
session_start();
if(!isset($_SESSION["users"])){
    $_SESSION["users"] = [];
}
$error_messages = [];

if(isset($_REQUEST["btnSubmit"])){
    if(empty($_REQUEST["username"])){
        $error_messages["username"] = "Username is required";
    }
    if(empty($_REQUEST["password"])){
        $error_messages["password"] = "Password is required";
    }
    if(empty($error_messages)){
        array_push($_SESSION["users"], ["username" => $_REQUEST["username"], "password" => $_REQUEST["password"]]);
      
        header("location: session_view.php");
    }
}
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="session_lesson.php" method="post">
        <?php
            if(isset($error_messages["username"])){
                echo $error_messages["username"];
            };
            ?>
            <br>
      <label for="">Username: </label>
        <input type="text" name="username">
        <br>
        <?php
            if(isset($error_messages["password"])){
                echo $error_messages["password"];
            };
            ?>
            <br>
        <label for="">Password: </label>
        <input type="password" name="password">
        <input type="submit" name="btnSubmit">
    </form>
</body>
</html>
