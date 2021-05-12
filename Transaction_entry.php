<!DOCTYPE html>
<html>
  
    <head>
        <title>Insert Page page</title>
    </head>
  
    <body>
        <?php
        $dbcon = mysqli_connect("localhost", "root", "", "login");
          
        // Check connection
        if($dbcon === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $sender =  $_REQUEST['sender'];
        $receiver = $_REQUEST['receiver'];
        $amount =  $_REQUEST['amount']; 
        // date_default_timezone_set('Asia/Kolkata');
        $date =date("Y/m/d");
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO transfer (username,receiver,amount,datetime) VALUES('$sender','$receiver','$amount','$date')";
          
        if(mysqli_query($dbcon,$sql))  
        {  
            echo("<script>alert('transaction successful')</script>");
            echo"<script>window.open('print_transactions.php','_self')</script>";  
        }  
        else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($dbcon);
        }
          
        // Close connection
        mysqli_close($dbcon);
        ?>
    </body>
</html>