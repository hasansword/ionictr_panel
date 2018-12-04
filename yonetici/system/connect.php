<?php    
    $hostname="####";
    $username="####";
    $pass="####*";
    $db="####";
    $conn =new mysqli($hostname,$username,$pass,$db);
    mysqli_set_charset($conn,"utf8");
    if(!$conn)
    {
        die("Bağlantı Hatası : ".mysqli_connect_error());
    
    }

?>