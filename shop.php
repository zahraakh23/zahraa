<!DOCTYPE html>
<html lang="en">

<head>

    <title>Furniture</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        
    <style>


        h3{
            font-family:arial;
            font-weight: bold;
            font-size:35px;
            color:#1a5875;
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
            width:60%
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
    color:rgb(247, 195, 132);
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
    <h3>𝘼𝙡𝙡 𝙁𝙪𝙧𝙣𝙞𝙩𝙪𝙧𝙚 𝘼𝙫𝙖𝙞𝙡𝙖𝙗𝙡𝙚</h3>
    
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
   
     <a href='val.php? id=$row[id]' class='btn btn-success'>Add to card</a>

  </div>
</div>
</main>
    <center>
    ";
}



?>
 
</body>
</html>