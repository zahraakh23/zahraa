<?php
session_start();
include('config.php');

if(isset($_POST['add'])){
    $user_id=$_SESSION['user_info']['id'];
    echo($user_id);
    $NAME= $_POST['name'];
    $PRICE = $_POST['price'];
    $insert="INSERT INTO thecard (name,price,user_id) values ('$NAME','$PRICE','$user_id')";
    mysqli_query($con,$insert);
}
   
 header('location:card.php')
?>
