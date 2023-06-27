<!DOCTYPE html>
<html lang="en">

<head>

    <title>Products</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/index.css">
    <style>
        h3{
            font-family:Arial Bold;
            font-weight: bold;
        }
        .card{
            float: left;
            margin-top:40px;
            margin-left:10px;
            margin-right:10px;
        

        }
        .card{
            width:100%;
            height:350px;
        }
        main{
            color:white;
            width:60%
        }
    </style>
</head>
<body>
  <center>
    <h3>All Furniture Available</h3>
</center>
<?php 
include('config.php');
$result=mysqli_query($con,"SELECT * FROM products");
while($row = mysqli_fetch_array($result)){
    echo "
    <center>
    <main>
     <div class='card' style='width: 18rem;'>
     <img src='$row[image]' class='card-img-top' >
     <div class='card-body'>
     <h5 class='card-title'>$row[name]</h5>
     <p class='card-text'>$row[price]</p>
     <a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete</a>
     <a href='update.php? id=$row[id]' class='btn btn-primary'>Edit</a>

  </div>
</div>
</main>
    <center>
    ";
}



?>
 
</body>
</html>