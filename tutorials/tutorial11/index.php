<?php
require 'db.php';

session_start();
if(isset($_SESSION['message']))
{
    echo $_SESSION['message'];
    unset($_SESSION['message']);    
}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<!-- asd -->
    <title>Home</title>
    <style>
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}
    </style>
    
</head>
<body>

    <div class="container mb-3 mt-3">
    <a class="link-primary" href="registration.php"><h5>Insert Data</h5></a>
        <table class="table table-striped table-bordered" id="myTable" style="width: 100%">
            <thead class="table-dark">
                <tr>
                    <td><b>Id</b></td>
                    <td><b>Name</b></td>
                    <td><b>Profile</b></td>
                    <td><b>Email</b></td>
                    <td><b>Enroll No</b></td>
                    <td><b>Contact No</b></td>
                    <td><b>Action</b></td>
                </tr>
            </thead>
            <?php
            $sql = "select id,upper(name) as name,email,upper (enrollno) as enrollno,contactno,profile from std_info";
            $result = $db->query($sql);
            $count = 1;
            while($row = $result-> fetch_assoc()){
        
            ?>
                <tbody>
                    <tr id="tab_1">
                        <td><?=$count++;?></td>
                        <td><?=$row['name']?></td>
                        <td><img src="img/<?= $row['profile'];?> " width="70" height="60"></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['enrollno']?></td>
                        <td><?=$row['contactno']?></td>
                        <td>
                            <!-- <button class="btn btn-primary"><a class="text-white" href="registration.php?id=<?php echo $row['id'];?>">Edit</a></button> -->
                            <button class="btn btn-danger"><a class="text-white" onclick="return confirm('Do you want to Delete?');" href="user_delete.php?id=<?php echo $row['id'];?>">Delete</a></button>
                        </td>
                        </tr>
                        </tbody>
                <?php
                }
                ?>

        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
});
    </script>
</body>

</html>