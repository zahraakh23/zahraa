<!DOCTYPE html>

<html lang="en">


    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>About Us page</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

        <style>

            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

            *{

                padding: 0;

                margin: 0;

                box-sizing: border-box;

                font-family: poppins;

            }

            #about-section {

                width: 100%;

                height: auto;

                display: flex;

                justify-content: space-between;

                align-items: center;

                padding: 80px 15%;

            }

            .about-left img{
padding-top:1px;
                width: 320px;
margin-left:90px;
                height: auto;
border-radius:10px;

                transform: translateY(50px);

            }

            .about-right {

                width: 54%;

            }


            .about-right ul1 li1 {

                display: flex;

                align-items: center;

            }


            .about-right h1 {

                color: #1a5875;

                font-size: 37px;

                margin-bottom: 5px;

            }


            .about-right p {

                color: #444;

                line-height: 26px;

                font-size: 15px;

            }


            .about-right .address {

                margin: 25px 0;

            }


            .about-right .address ul1 li1 {

                margin-bottom: 5px;

            }


            .address .address-logo {

                margin-right: 15px;

                color: #1a5875;

            }


            .address .saprater {

                margin: 0 35px;

            }

        
.icons{
    background:#1a5875;
    display: flex;
    justify-content: center;
    padding: 0.9rem 0;
}
.icons li1{
    list-style-type: none;
    background:#fff;
    color:#1a5875;
    width: 40px;
    height: 40px;
    margin: 0 0.99rem;
    border-radius: 90%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.5s ease-in-out;
}
.icons li1:hover{
    background: #edffec;
    color: blue;
}


            .icons h3 {
                color:white;

                margin-bottom: 10px;

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


        <section id="about-section">

            <!-- about left  -->

            <div class="about-left">

                <img src="WhatsApp Image 2023-05-27 at 1.57.53 PM.jpeg" alt="About Img"/>

            </div>


            <!-- about right  -->
            <div class="about-right">

                <h4>Welcome !</h4>

                <h1>Chic Design By Ali Khalifeh</h1>
            

                <p>Luxury is its permanent address, and your comfort is our goal. It is ready on demand at attractive and imaginative prices. The main entrance to Ghaziyeh is opposite the bridge.

                </p>

                <div class="address">

                    <ul1>

                        <li1>

                            <span class="address-logo">

                                <i class="fas fa-paper-plane"></i>

                            </span>

                            <p>Address</p>

                            <span class="saprater">:</span>

                            <p>Ghaziyeh-Al Janub-Lebanon</p>

                        </li1>

                        <li1>

                            <span class="address-logo">

                                <i class="fas fa-phone-alt"></i>

                            </span>

                            <p>Phone No</p>

                            <span class="saprater">:</span>

                            <p>+961 03/625-193</p>

                        </li1>

                        <li1>

                            <span class="address-logo">

                                <i class="far fa-envelope"></i>

                            </span>

                            <p>Email ID</p>

                            <span class="saprater">:</span>

                            <p>Khalifehzahraa73@gmail.com</p>

                        </li1>

                    </ul1>

                </div>
                <br><br>

                <ul1 class = "icons">

                    <h3>My accounts</h3>
                    
         <li1> <a href="https://www.facebook.com/profile.php?id=100056007831864&mibextid=ZbWKwL"><i class = "fab fa-facebook-f"></i></a></li1>
         
         <li1> <a href="https://instagram.com/chic_designn__?igshid=MzRlODBiNWFlZA=="><i class = "fab fa-instagram"></i></a></li1>
          </ul1>
        </div>

            </div>

        </section>

    </body>


</html>