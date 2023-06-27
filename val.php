<?php
include('config.php');
$ID=$_GET['id'];
$up=mysqli_query($con,"select * from products where id=$ID");
$data=mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Purchase confirmation</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
      
        <style>
            h2{
                font-family:arial;
            font-weight: bold;
            font-size:35px;
            color:#1a5875;
            }

            input{
                display:none;
            }
            .main{
                width:30%;
                padding:20px;
                box-shadow:1px 1px 70px silver;
                margin-top:50px;
                background:white;
            }
            .menu{
            display: flex;
            justify-content: center;
            align-items: center;
             background-color:rgb(250, 240, 228);
             margin-top: 1px;

        }
        ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 100px;
    margin-top: 27px;
    font-size: 15px;
}

ul li a{
    text-decoration:none;
    color: #1a5875;
    font-family:Arial, Helvetica, sans-serif;
    font-weight:bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color:rgb(247, 195, 132)\;
}
.logo{
    color: #1a5875;
    font-size: 40px;
    font-family:Arial Bold;
    padding-left: 40px;
    line-height:none;
    padding-top: 10px;
    margin-top: 8px
}
img{
    width: 200px;
    height: 200px;
    overflow: hidden;

    transition: all 0.9s ease-in-out;
    display: block;
    margin-left: 15px ;
    
    width: 300px;
    
}
.btn{
    padding-top:10px;
    margin:10px;
}

            </style>
</head>
<body>
 
<div class="menu">
                <ul>
                <h2 class="logo">𝓒𝓱𝓲𝓬 𝓓𝓮𝓼𝓲𝓰𝓷</h2>
                <li><a href="home.php">HOME</a></li>
                    <li><a href="about-us.php">ABOUT</a></li>
                    <li><a href="shop.php">COLLECTION</a></li>
                    <li><a href="card.php">RESERVATION</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                </ul>
            </div>
        
    <center>
        <div class="main">
        <form action="insert_card.php" method="post">
            <h2> Are you sure to buy?</h2>
            <center>
            <img src = "WhatsApp Image 2023-05-27 at 7.06.27 PM.jpeg" alt = "about image">
</center>
            <input type="text" name='id' value='<?php echo $data['id']?>'>
            <input type="text" name='name' value='<?php echo $data['name']?>'>
            <input type="text" name='price' value='<?php echo $data['price']?>'>
            <button name="add" type="submit" class='btn btn-warning'>confirmation</button>
            <br>
          
        </form>
        </div>
        </center>
        
</body>
</html>