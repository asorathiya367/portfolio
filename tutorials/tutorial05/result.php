<?php
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $m = $_POST["month"];
    echo "You have selected"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-sm-12">
                <select class="col-xl-9 col-sm-12">
                    <option <?= ($m==1)?"selected":0; ?>>January</option>
                    <option <?= ($m==2)?"selected":0; ?>>February</option>
                    <option <?= ($m==3)?"selected":0; ?>>March</option>
                    <option <?= ($m==4)?"selected":0; ?>>April</option>
                    <option <?= ($m==5)?"selected":0; ?>>May</option>
                    <option <?= ($m==6)?"selected":0; ?>>June</option>
                    <option <?= ($m==7)?"selected":0; ?>>July</option>
                    <option <?= ($m==8)?"selected":0; ?>>August</option>
                    <option <?= ($m==9)?"selected":0; ?>>September</option>
                    <option <?= ($m==10)?"selected":0; ?>>October</option>
                    <option <?= ($m==11)?"selected":0; ?>>November</option>
                    <option <?= ($m==12)?"selected":0; ?>>December</option>
                </select>
            </div>
        </div>
    </div>
</body>
</html>