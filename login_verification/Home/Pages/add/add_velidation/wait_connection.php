<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="style.css">


</head>

<body>
    <div id="parent">
        <div id="child">
            <img src="img/base.png" alt="" srcset="" id="base"><br>
            <img src="img/lef.png" alt="" srcset="" id="lef">
        </div>

    </div>



</body>

</html>



<?php

session_start();
include "db.php";
$key = $_SESSION['pass_key'];


if (isset($_POST)) {



    $a = $_POST['a'];
    $aa = $_POST['aa'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];
    $f = $_POST['f'];
    $g = $_POST['g'];
    $h = $_POST['h'];
    $i = $_POST['i'];
    $j = $_POST['j'];
    $k = $_POST['k'];
    $l = $_POST['l'];
    $m = $_POST['m'];
    $n = $_POST['n'];

    $data = array(
        "a" => $a,
        "aa" => $aa,
        "b" => $b,
        "c" => $c,
        "d" => $d,
        "e" => $e,
        "f" => $f,
        "g" => $g,
        "h" => $h,
        "i" => $i,
        "j" => $j,
        "k" => $k,
        "l" => $l,
        "m" => $m,
        "n" => $n





    );
    $total = ($a + $aa + $b + $c + $d + $e + $f + $g + $h + $i + $j + $k + $l + $m + $n);


    $data_json = json_encode($data);
    $date = date("y-m-d");

    $x = "20" . $date;

    $check = $conn->prepare("SELECT record_dat FROM record where pass=:keyy");
    $check->bindParam(':keyy', $key);
    $check->execute();
    $check_result = $check->fetchAll();

    if ($x == $check_result[0]['record_dat']) {
        echo '<script>alert("Today\'s record has already been saved in your diary.");
    setTimeout(redirect,1000);
    function redirect(){
     window.location.replace("../../../Home.php");
    }
    </script>';
    } else {

        $record = $conn->prepare("INSERT INTO record(pass,record_dat,data_json,total) values(:keyy,:datee,:data_json,:total);");
        $record->bindParam(':keyy', $key);
        $record->bindParam(':datee', $date);
        $record->bindParam(':data_json', $data_json);
        $record->bindParam(':total', $total);




        if ($record->execute()) {
            echo "<script>alert('New data has been added to your diary.');
    setTimeout(redirect,1000);
     function redirect(){
       window.location.replace('../../../Home.php');
         
    }
    </script>";



        } else {

            echo "<script>alert('Unexpected error. Please try again.');
    setTimeout(redirect,1000);
    
    function redirect(){
     window.location.replace('../../../Home.php');
        
    }
    </script>";

        }



    }

}







?>