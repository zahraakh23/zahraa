<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="css/d.css">
    <style>
  
img{
    width: 200px;
    height: 200px;
    overflow: hidden;
    border-radius: 50%;
    transition: all 0.5s ease-in-out;
    display: block;
    margin-left: 200px ;
    
    width: 200px;
    
}
        </style>
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">𝓒𝓱𝓲𝓬 𝓓𝓮𝓼𝓲𝓰𝓷</h2>
            </div>

            <div class="menu">
                <ul>
                <li><a href="home.php">HOME</a></li>
                    <li><a href="about-us.php">ABOUT</a></li>
                    <li><a href="shop.php">COLLECTION</a></li>
                    <li><a href="card.php">RESERVATION</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                </ul>
            </div>

        </div> 
        <div class="content">
        <h1>Craft your <br>Dream Home From</br><span><b>Chic Design</b></span></h1>
            <br>
                <img src = "about-img.jpg" alt = "about image">

            <p class="par">Designing your dream home is an exciting and adventurous process <br>for most people, If you are considering building a new home or want to </br>change up the look of your existing one you have to shop Chic Design by Ali Khalifeh.
            

<?php

if(isset($_GET['flag'])){
    if($_GET['flag']==1)
        echo "<b>email or pass is wrong !!<b>";
        
} 


?>



            <form method="post" action="login_action.php" style="margin: auto;padding:10px;">
                <div class="form">
                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Enter Email Here" required>
                    <input type="password" name="password" placeholder="Enter Password Here" required>
                    <button class="btnn"><a>Login</a></button>

                    <p class="link">Don't have an account<br>
                    <a href="signup.php">Sign up </a> here</a></p>
                    <p class="liw">Log in with</p>
<center>
                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    </div>
</center>
                </div>
                    </div>
                </div>
        </div>
</div> 
    <link rel="stylesheet" href="css/d.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
 <?php  require "footer.php";?>
</body>
</html>