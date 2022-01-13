<?php
  session_start();  


  if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
  {
       $user = $_POST['username'];
       $pass = $_POST['password'];


       if(isset($_SESSION['username']))   // Checking whether the session is already there or not
       {
            $valuser=$_SESSION['username'];
            $valpass=$_SESSION['password'];
            
            if(($user == $valuser)  && ($pass == $valpass))
            {

                //echo '<script type="text/javascript"> window.open("index.php","_blank");</script>';    //  On Successful Login redirects to index.php
	header("location:index.php");
            }
            else
            {
                echo '<script type="text/javascript"> alert("Invalid Username Or Password");</script>';        
            }
        }
        else
        {
                echo '<script type="text/javascript">
                           alert("Please Registration First");
                           window.open("registration.php","_blank");
                      </script>';             
        }
        if (!empty($_POST['rememberme'])) 
        {  
            $remember=$_POST['rememberme'];

            setcookie('username',$user,time()+3600*24*7);
            setcookie('password',$pass,time()+3600*24*7);  
            setcookie('rememberme',$remember,time()+3600*24*7);
        }
      
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Login</title>
    <style>
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}
    </style>
</head>

<body background="bgimage.jpg">
<form action="login.php" method="post">
    <div class="container mt-3">
        <div class="" style="margin-top:100px">
        <div class="row justify-content-center">
            <div class="col-sm-6 p-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center"> Login Here </h3>

                        <div class="row p-2">
                            <div class="col-md-4">
                                Username
                            </div>
                            <div class="col-md-8">
                                <input type="email" name="username" class="form-control" for="exampleFormControlInput1" id="username" placeholder="name@example.com">
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                                Password
                            </div>
                            <div class="col-md-8">
                                <input type="password" name="password" class="form-control" id="inputpassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="row mt-3">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="rememberme" id="rememberme" >
                                        Remember Me        
                                    </div>
                                </div>
                            </div>

                        <div class="row p-3">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <input class="btn btn-primary" type="submit" value="Login" name="login">
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col text-center">
                                <p>Don't Have Account? <a href="Registration.php" class="link-primary">Registration</a> Here.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>

</html>