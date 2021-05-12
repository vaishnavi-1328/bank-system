<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <style>
            body{
                background: url('https://www.civista.bank/assets/img/olb-background.png');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            #frm{
                background: rgba(255,255,255,0.25);
                width: 20%;
                border-radius: 5px;
                margin: 100px auto;
                /* background: #28C0EF; */
                padding: 50px;
            }
            #btn{
                color: #fff;
                background: #337ab7;
                padding:2%;
                border-radius : 4px;
                content: '\f106';
            }
            
        </style>
        <div class="row">
        <div id="frm">
            <form action="loginprocess.php" method="POST">
                <p>
                    <label>Username:</label>
                    <input type="text" id="user" name="user"/>
                </p>
                <p>
                    <label>Password:</label>
                    <input type="password" id="user" name="pass"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="login"/>
                </p>
                
            </form>
        </div> 
        </div>
</body>
</html>
   
