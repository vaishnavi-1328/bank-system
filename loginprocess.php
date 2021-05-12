<?php
    $username=$_POST['user'];
    $password=$_POST['pass'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);

    $dbcon=mysqli_connect("localhost","root","");
    mysqli_select_db($dbcon,"login");

    $result= mysqli_query($dbcon,"select * from users where username='$username' and password='$password' ") 
    or die("Failed to query database");
    $row=mysqli_fetch_array($result);
    if($row['username']==$username && $row['password']==$password){
        echo("<script>alert('successful login')</script>");
        echo("<script>window.open('print_transactions.php','_self')</script>");
    }
    else{
        echo("Failed to login");
    }
?>