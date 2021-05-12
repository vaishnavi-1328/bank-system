<!DOCTYPE html>
<html>
  
    <head>
        <title>Insert Page page</title>
    </head>
  
    <body>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "login");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $firstname =  $_REQUEST['firstname'];
        $username = $_REQUEST['username'];
        $mobile =  $_REQUEST['mobile'];
        $password = $_REQUEST['password'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO users (`Name`,`username`,`phonenumber`,`password`)VALUES('$firstname','$username','$mobile','$password')";
          
        if(mysqli_query($conn,$sql))  
        {  
            echo("<script>alert('registration successful')</script>");
            echo"<script>window.open('print_transactions.php','_self')</script>";  
        }  
        else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </body>
</html>