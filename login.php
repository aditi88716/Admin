<!--not in use-->


<?php

$email = $_POST['email'];
$password = $_POST['password'];

if(isset($_POST["submit"])) 
{
    if($_POST["email"] == $email && $_POST["password"] == $password) 
    {
        echo "Login successful";
    } 
    else 
    {
        echo "Incorrect Login";
    }
}

?>