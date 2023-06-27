<!DOCTYPE html>
<html lang="en">

<head>

    <title>update</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/index.css">
        <style>
        main{
            color:white;

        }
    </style>
    
</head>
<body>
    <?php 
    include('config.php');
    $ID=$_GET['id'];
    $up= mysqli_query($con, "select * from products where id=$ID");
    $data=mysqli_fetch_array($up);
    ?>
   <center>
    
        <div class="body">
       <form action="up.php" method="post" enctype="multipart/form-data">
           
                <h2> Update the Furniture </h2>
                <label1>Id Name  :</label1>
                <input type="text" name='id' value='<?php echo $data['id']?>'>
                    <br>
                    <label1>Product Name:</label1>
                    <input type="text" name='name' value='<?php echo $data['name']?>'>
                    <br>
                    <label1>Product Price:</label1>
                    <input type="text" name='price' value='<?php echo $data['price']?>'>
                    <br>
                    <input type="file" id="file" name='image' style='display:none;'>
                    <label for ="file">upload image </label>
                    <button name='update' type='submit' >Update </button>
                    <br><br>
                    <a href="products.php">products</a>
                   
</form>
</div>
<p>Developer By Ali Khalifeh </p>
</center>
</body>
</html>
