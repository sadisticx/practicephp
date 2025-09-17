<?php
    $error_message = "";

    if(isset($_REQUEST['btnSubmit'])){
        if(empty($_REQUEST['fullname'])){
            $error_message .= "Fullname is required!<br>";
        }
        if(empty($_REQUEST['email'])){
            $error_message .= "Email is required!<br>";
        }
        if(empty($_REQUEST['password'])){
            $error_message .= "Password is required!<br>";
        }
        if(!empty($_REQUEST['contactno']) && !is_numeric($_REQUEST['contactno'])){
            $error_message .= "Contact number must only be numbers!<br>";
        }
    }

?>

<?php 
        if($error_message != ""){
            echo "Error: $error_message";
        }else{
            echo "Name: " . $_REQUEST['fullname'], "<br>";
            echo "Email: " . $_REQUEST['email'], "<br>";
            echo "Password: " . $_REQUEST['password'], "<br>";
            echo "Contact No: " . $_REQUEST['contactno'], "<br>";
        }
?>