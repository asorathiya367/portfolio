<?php
    require 'db.php';

    $name="";
    $email="";
    $enrollno="";
    $cno="";
    $profile="";

    $id=$_GET['id'];

    $id = (isset($_GET['id']))?$_GET['id']:'';
    $sql = "select * from std_info where id='$id'";
    $result = $db->query($sql);
    $row =$result->fetch_assoc();

    if($id!=''){
            $name=$row['name'];
            $email=$row['email'];
            $enrollno=$row['enrollno'];
            $cno=$row['contactno'];
            $profile=$row['profile'];

    }





?>
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
            <form action="user_add.php" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-body mt-4">
                        <!-- <h3 class="text-center">Registration Here</h3> -->

                            <input type="hidden" id="name" name="id" value="<?=$id?>">
                        <div class="row p-2">
                            <div class="col-md-4">
                                Name
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control"  id="name" name="name" placeholder="Name" value="<?=$name?>">
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                              Email
                            </div>
                            <div class="col-md-8">
                                <input type="email" class="form-control"  id="email" name="email" placeholder="eamil@address.com" value="<?=$email?>">
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                                EnrollMent No.
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" for="exampleFormControlInput1" id="enrollno" name="enrollno" placeholder="21SOECA21056" value="<?=$enrollno?>">
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                              Contact No.
                            </div>
                            <div class="col-md-8">
                                <input type="number" class="form-control"  id="contactno" name="contactno" placeholder="Contact No" value="<?=$cno?>">
                            </div>
                        </div>

                        <div class="row p-1">
                            <div class="col-md-4">
                                Profile Photo
                            </div>
                            <div class="col-md-8">
                                <input id="file"
                                onchange="return fileValidation()"
                                 class="form-control" name="profile" type="file" accept=".jpg,.png,.jpeg,.bmp" value="<?=$profile?>">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
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
</html>