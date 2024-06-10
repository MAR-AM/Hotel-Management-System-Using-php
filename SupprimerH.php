<?php

    $conn  = new PDO('mysql:host=localhost; dbname=hotel','Mama','Mama@123@');    
    $id = $_GET['id_Hotel'];
    $x = $conn->prepare('DELETE FROM hotel where id_Hotel=?');
    $delete = $x->execute([$id]);
    header('location: listerH.php');
    
?>