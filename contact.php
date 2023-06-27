<!DOCTYPE html>
<html>
  <head>
    <title>Contact us</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
   <style>
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
h1{
            font-family:arial;
            font-weight: bold;
            font-size:35px;
            color:#1a5875;
        }
        .form{
    width: 250px;
    height: 380px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%0) ;
    position: center;
   
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}
label1{
  font-family:arial;
  color:white;
  font-weight: bold;
  font-size:19px;
  margin-right:95px;
}
label2{
  font-family:arial;
  color:white;
  font-weight: bold;
  font-size:19px;
  margin-right:130px;
}
label3{
  font-family:arial;
  color:white;
  font-weight: bold;
  font-size:19px;
  margin-right:95px;
}
.background{
background-image:url(a.jpg);
height: 100vh;
weight:100px;
background-size: cover;
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


 
            <form action="contact_action.php"  method="post">
        <center>
        <h1>Contact us</h1>
</center>
        <?php
        if(isset($_POST['submit']))
        {
          if($email !== 1)
          {
            echo("<div class='error' style='color:red !important;'>Email invalid</div>");
          }
        }
        ?>
        <br>
        <br>

        <center>
          <div class="form">
          <label1 for="form_name">Firstname:</label1>
        <input type="text" name="name" placeholder="Name:" required >
        <br>
        <br>
        <label2 for="form_email">Email:</label2>
        <input type="email" name="email" placeholder="Email:" required >
        <br>
        <br>
        <label3 for="form_message">Message:</label3>
        <textarea name="message" placeholder="Message:" rows="5"></textarea>
        <br>
        <br>
        <button type="submit" href="/">Submit</button>
      </div>
    </center>
    
  </body>
</html>