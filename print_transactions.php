<!DOCTYPE html>
    <head>
        <title>Transaction History</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="table.css">
        <style>
            body{
                padding:3%;
            }
            table 
            {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
            }
                
            td, th {
                    border: 3px solid #1f1a1a;
                    text-align: left;
                    padding: 8px;
            }
                
            tr:nth-child(even) {
                    background-color: #78a09e;
            }
            .row{
                    padding: 5%;
                    align-items: center;
            }
            body{
                    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJt7RogGpw4fzp86xCDDEIvJtPbmYPQ96m3A&usqp=CAU");
                    background-repeat: no-repeat;
                    background-size: cover;
            }
            #btn{
                    padding-right: 8%;
                    padding-bottom: 3%;
                    border-radius: 5px;
                    content: '\f424';
            }
        </style>
    </head>
    <body >
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Bank application</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-flex" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="homepage.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="registerhtml.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Faqs</a>
                        </li>
                    </ul>
                </div>
            </span>
        </div>
    </div>
        </nav>
    </div>
        <div class="row">
            <p style="text-align: center;"><h1>TRANSACTION HISTORY</h1> </p>
        </div>
        <div class="row">
            <?php
                $dbcon=mysqli_connect("localhost","root","","login");

                if($dbcon->connect_error){
                    die("oops connection failed". $dbcon->connect_error);
                }
                $sql= "SELECT * FROM transfer ";
                $result=$dbcon->query($sql);

                if($result->num_rows>0){
                    echo "<table>
                            <tr>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>amount</th>
                            <th>date</th>
                            </tr>";
                    // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row["username"]. "</td>
                                <td>" . $row["receiver"]. "</td>
                                <td>" . $row["amount"]. "</td>
                                <td>" . $row["datetime"]. "</td>
                            </tr>";
                        }
                    echo "</table>";
                }
                
            ?>
            <br>
            <form action="Transaction_entry.html" id="inline">
                <br>
                    <input type="submit" value="Make a transaction" id="btn"/>
            </form>
        </div>
        <div class="row">
            
        </div>
    









