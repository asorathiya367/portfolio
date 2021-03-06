<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration</title>
    <style>
        body
            {
                background: #4b6cb7;
                background: -webkit-linear-gradient(to right, #182848, #4b6cb7);
                background: linear-gradient(to right, #182848, #4b6cb7);
            }
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}

    </style>
</head>

<body>
    <div class="container mx-auto">
        <div class="row justify-content-center ">
            <div class="col-sm-6 p-3">
                <form action="validateuser.php" method="post">
                <div class="card rounded-3 bg-dark text-light">
                        <h5 class="mt-3 text-center">REGISTRATION</h5>
                        <div class="card-body">
                            <div class="row p-1">
                                <div class="col-md-4">
                                    Username
                                </div>
                                <div class="col-md-8">
                                    <input type="email" id="username" name="username" class="form-control bg-dark text-light" placeholder="name@example.com">
                                </div>
                            </div>
                            
                            <div class="row p-2">
                                <div class="col-md-4">
                                    Password
                                </div>
                                <div class="col-md-8">
                                    <input type="password" id="password" name="password" class="form-control bg-dark text-light" placeholder="Password">
                                </div>
                            </div>
                            <div class="row p-1">
                                <div class="col-md-4">
                                    Re-Password
                                </div>
                                <div class="col-md-8">
                                    <input type="password" id="repassword" class="form-control bg-dark text-light" placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="row p-1">
                                <div class="col-md-4">
                                    Age
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="age" name="age" class="form-control bg-dark text-light" placeholder="Age">
                                </div>
                            </div>
                            
                            <div class="row p-1">
                                <div class="col-md-4">
                                    Date of Birth
                                </div>
                                <div class="col-md-8">
                                    <input type="date" name="dob" id="dob" class="form-control bg-dark text-light">
                                </div>
                            </div>

                            <div class="row p-1">
                                <div class="col-md-4">
                                    Country
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="country" name="country" class="form-control bg-dark text-light" placeholder="Country">
                                </div>
                            </div>
                            
                            <div class="row p-1">
                                <div class="col-md-4">
                                    State
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="state" name="state" class="form-control bg-dark text-light" placeholder="State">
                                </div>
                            </div>
                            
                            <div class="row p-1">
                                <div class="col-md-4">
                                    City
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="city" name="city" class="form-control bg-dark text-light" placeholder="City">
                                </div>
                            </div>
                            
                            <div class="row p-1">
                                <div class="col-md-4">
                                    Profile Photo
                                </div>
                                <div class="col-md-8">
                                    <input id="file" name="photo"
                                    onchange="return fileValidation()"
                                    class="form-control text-light bg-dark" type="file" accept=".jpg,.png,.jpeg,.bmp">
                                </div>
                            </div>
                            
                            <div class="row p-1">
                                <div class="col-md-4">
                                    Note
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control bg-dark text-light" name="note" id="note" placeholder="Leave a note here"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="d-grid gap-2 col-6 mx-auto mt-2">
                                    <button type="submit" id="register" class="btn btn-primary">REGISTER</button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col text-center mt-1">
                                    <b>Already User? </b><a href="login.php">Login Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>        
    </div>

    <script>
        function fileValidation() {
            var fileInput = 
                document.getElementById('file');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png|\.bmp)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Please Choose a Photo');
                fileInput.value = '';
                return false;
            } 
            else 
            {
                // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview').innerHTML = 
                            '<img src="' + e.target.result
                            + '"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }
    </script>
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#register').click(function(){
                $username = $('#username').val().toString();
                $psw = $('#password').val().toString();
                $repsw = $('#repassword').val().toString();
                $age = $('#age').val().toString();
                $country = $('#country').val().toString();
                $state = $('#state').val().toString();
                $city = $('#city').val().toString();

                if($username == "" | $psw == "" | $repsw == "" | $age == "" | $country == "" | $state == "" | $city == "")
                {
                    alert("Please enter all the values...");
                    return false;
                }
                else
                {
                    if($psw == $repsw)
                    {
                        alert("Registration Successful...");
                    }
                    else
                    {
                        alert("Password and Re-Password must be same");
                        return false;
                    }
                }
            });
        });
    </script>

</body>
</html>