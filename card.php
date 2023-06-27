<!DOCTYPE html>
<html lang="en">
<head>
<title>Furniture card</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
     
        <style>
            .background{
background-image:url(img.jpg);
height: 100vh;
weight:100px;
background-size: cover;
            }
            h3{
                display: block;
                color: #000;;
                 font-size: 2em;
                margin-top: 0.67em;
                margin-bottom: 0.67em;
                    margin-left: 0;
                  margin-right: 0;
                  font-weight: bold;

            }
            main{
                width:40%;
                margin-top:30px;
            }
            table{
                box-shadow:1px 1px 10px silver;

            }
            thead{
                background-color: #1a5875;
                color:#fff;
                text-align:center;
               
            }
            tbody{
                text-align:center;
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
.logo{
    color: #1a5875;
    font-size: 40px;
    font-family:Arial Bold;
    padding-left: 40px;
    line-height:none;
    padding-top: 10px;
    margin-top: 8px
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
            </style>
</head>
<body>
 
<div class="background">
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
    <h3>Your shop</h3>
</center>
   <?php
   session_start();
   include('config.php');
   $user_id=$_SESSION['user_info']['id'];
   

   $result=mysqli_query($con , "SELECT * FROM thecard ");
   while($row =mysqli_fetch_array($result)){

    echo "
    <center>
    <main>
        <table class='table'>
            <thead>
                <tr>
                <th scope='col'>User_id</th>
                    <th scope='col'>Furniture name </th>
                    <th scope='col'>Furniture price</th>
                    <th scope='col'>delete Furniture </th>

                </tr>
</thead>
<tbody>
<tr>
<td>$row[user_id]</td>
    <td>$row[name]</td>
    <td>$row[price]</td>
    <td><a href='delete_card.php? id=$row[id]' class='btn btn-danger'>Delete</a> </td>
</tr>
</tbody>

    </main>
</center>   
       "
   ;}?>
   
         
</body>
</html>