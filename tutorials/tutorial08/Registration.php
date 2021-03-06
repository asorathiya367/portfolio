<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Registration</title>
    <style>
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}
    </style>
</head>
<body background="bgimage.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 p-3">
                <form action="uploadfile.php" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Registration Here</h3>

                        <div class="row p-2">
                            <div class="col-md-4">
                                Username
                            </div>
                            <div class="col-md-8">
                                <input type="email" name="email" class="form-control" for="exampleFormControlInput1" id="username" placeholder="name@example.com">
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                                Password
                            </div>
                            <div class="col-md-8">
                                <input type="password"name="password" class="form-control"  id="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                                Re-Password
                            </div>
                            <div class="col-md-8">
                                <input type="password" name="repassword" class="form-control"  id="repassword" placeholder="Re-Password">
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                               Age
                            </div>
                            <div class="col-md-8">
                                <input type="number" name="age" class="form-control"  id="age" placeholder="Age">
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                               Birth-Date
                            </div>
                            <div class="col-md-8">
                                <input type="date" name="dob" class="form-control"  id="dob" placeholder="Birth Date">
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                              Country
                            </div>
                            <div class="col-md-8">
                                <select class="form-select" id="country" name="country" required>
                                    <option value="0">---Select Country---</option>
                                    <option>India</option>
                                    <option>USA</option>
                                    <option>UK</option>
                                    <option>Australia</option>
                                    <option>Pakistan</option>
                                  </select>
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                              State
                            </div>
                            <div class="col-md-8">
                                <select class="form-select" id="state" name="state" required>
                                    <option value="0">---Select State---</option>
                                    <option>Gujarat</option>
                                    <option>Maharastra</option>
                                    <option>Rajasthan</option>
                                    <option>Panjab</option>
                                    <option>Asam</option>
                                  </select> 
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                              City
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="city" id="city" placeholder="City">
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                              Profile Picture
                            </div>
                            <div class="col-md-8">
                                <input onchange="return fileValidation()" name="profile" type="file" class="form-control"  id="file" accept=".jpg,.png,.jpeg,.bmp">
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                              Notes
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" name="notes" placeholder="Leave a comment here" id="note"></textarea>
                            </div>
                        </div>

                        <div class="row p-3">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <input class="btn btn-primary" type="submit" id="register" value="Registration">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
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
                $note = $('#note').val().toString();

                if($username == "" | $psw == "" | $repsw == "" | $age == "" | $city == "" | $note == ""| $country == "0" | $state == "0" )
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
                        alert("Please enter all the values...");
                        return false;
                    }
                }
            });
        });
    </script>   
</body>
</html>