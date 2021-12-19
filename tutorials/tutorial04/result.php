<?php

    if(isset($_POST['cal']))
    {
        $p = $_POST['p'];
        $n = $_POST['n'];
        $r = $_POST['r'];
        $i = ($p*$n*$r)/100;
        echo "Simple Interest is: ".$i;
    }

?>