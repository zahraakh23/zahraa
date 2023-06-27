<!DOCTYPE html>
<html lang="en">

<head>

    <title>Home</title>
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
   <center>
  
        <div class="body">
       <form action="insert.php" method="post" enctype="multipart/form-data">
           
                <h2>𝓒𝓱𝓲𝓬 𝓓𝓮𝓼𝓲𝓰𝓷 </h2>
                    
                    <br>
                    <br>
                    <label1>Furniture Name:</label1>
                    <input type="text" name='name'>
                    <br>
                    <label1>Furniture Price:</label1>
                    <input type="text" name='price' >
                    <br>
                    <input type="file" id="file" name='image' style='display:none;'>
                    <label for ="file">upload image </label>
                    <button name='upload'>Donne </button>
                    <br><br>
                    <a href="products.php">products</a>
                   
</form>
</div>
<p>Developer By Ali Khalifeh </p>
</center>
<link rel="stylesheet" href="css/index.css">
</body>
</html>
