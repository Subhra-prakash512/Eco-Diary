<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>

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
include "db.php";
 
if (isset($_POST)) {
    $pass = $_POST['pass'];
    $check_pass = $conn->prepare("SELECT * from pass Where pass=:pass");
    $check_pass->bindParam(':pass', $pass);
    $exe = $check_pass->execute();
    $result = $check_pass->fetchAll();

}
if ($result[0][0] == $result[0]['pass'] && $result[0][0] == $pass) {
    session_start();
    $_SESSION['pass_key'] = $result[0][0];
    header('Location:Home/Home.php');
} else {
    echo "<script>alert('Enter valid passkey');
    setTimeout(redirect,1000);
    
    function redirect(){
        window.location.replace('../');
    }
    </script>";


}

?>