<?php
$username = 'root';
$server = "localhost";
$password = "";
$db = "1m1b_project";


try {
    $conn = new PDO("mysql:host=$server;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "<script>alert('Server Side Error');
    setTimeout(redirect,1000);
    
    function redirect(){
        window.location.replace('../');
    }
    </script>";
    exit;

}




?>