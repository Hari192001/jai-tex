<?php

$con = mysqli_connect("localhost","root","","contact01");

if(isset($_POST['submit_btn']))
{
    $username=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST["message"];


    $query="INSERT INTO contacts VALUES ('$username', '$email', '$subject', '$message')";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        echo "successfully inserted";
    }
    else{
        echo "insertion failed";
    }
}

?>