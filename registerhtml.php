<html>  
<head lang="en">  
        <meta charset="UTF-8">  
        <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Registration</title>  
</head>  
<style type="text/css">  
    #head1{
        margin-top: 50px;
    }
    #af{
        text-decoration: none;
        color:#777;
        font-size:18px;
    }
    #af:hover{
        color:white;
    }
    #ip{
            padding-right:10px; 
            color: white;
        }
    #hf{
    color: white;

    }
    #grad
    {
        margin-left: 40%; 
        
        border-bottom-left-radius:10% 50%;
        border-top-left-radius:10% 50%;
        border: none;

    /*border-radius: 8rem;*/

        height:85%;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 3.5%;
        margin-bottom: 3%;
        cursor: pointer; 
    }
    label{
        margin-left:40%; 
    }
    .form-control{
        width: 60%;
        margin-left: 40%;
        height:7%;
        }
      body{
        background:-webkit-linear-gradient(left, #3931af, #00c6ff);
      }  
    #reg{
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #0062cc;
        color: #fff;
        font-weight: 600;
        width: 40%;
        cursor: pointer;
    }
    #Login{
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
    }
</style>  
<body>
    <div class="col-md-3 register-left">
        <form action="login.php">
            <h3 style="color: white;font-size: 40px">Welcome</h3>
            <input type="submit" value="Login" id="Login" /><br/>
        </form>
    </div>
    
    <div class="container-fluid" id="grad" >
        <h1 class="l1" id="head1"><center><b>REGISTRATION </b></center></h1>
        <form  role="form" method="post" action="register.php">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label  class="l1">First Name</label>  
                    <input type="text" class="form-control"  name="firstname" placeholder="First Name *" required=""></div></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label  class="l1">Last Name</label>  
                            <input type="text" class="form-control"  name="lastname" placeholder="Last Name *" >  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" class="l1">
                            <label >Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="e-mail *" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">  
                            <label  class="l1">Mobile</label>  
                                <input type="number" class="form-control" name="mobile" placeholder="Mobile *" required="">  
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">  
                            <label  class="l1">Username</label>  
                            <input type="text" class="form-control" name="username" placeholder="Choose Username *" required="">  
                        </div>
                    </div>
                 <div>
  
                <div class="col-md-6">
                    <div class="form-group">  
                        <label  class="l1">Password</label>  
                        <input type="password" class="form-control"  name="password" placeholder="Choose Password *" required="">  
                    </div> 
                </div>
            </div>
            <br><br><br><br>
            <div align="center">
                <input type="submit"  name="submit" value="Register" class="btn btn-primary" id="reg">
            </div>
        </form>
    </div>
</body>  
</html>  
  
 
  

