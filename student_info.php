<?php
$filename="studentinfo.txt";
if($_SERVER["request_method"]=="POST"){
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $roll=$_POST['roll'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $fptr=fopen($filename,'a');
    fwrite($fptr,$username:$password);
    fclose($ptr);
    echo("Submitted successfully");}
    else{
        echo"unsuccessful";
    }
?>