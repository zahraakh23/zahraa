<?php 
    include('db_config/connect.php');
    $s=0;

    function PasswordCheck($password_string)
    {
        #$password_string = trim($password_string);
        if($password_string == '')
        {
            header('location:signup.php?flag=1');
            $s = 1;
        }
        elseif(strlen($password_string) < 8)
        {
            header('location:signup.php?flag=1');
            $s = 1;
        }
        elseif(!(preg_match('#[0-9]#', $password_string)))
        {
            header('location:signup.php?flag=1');
            $s = 1; 
        }
        else
        {
        //Success, now process password
        }
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    PasswordCheck($password);
    if($s == 1){
        header('location:signup.php?flag=1');
    }else{
        $query="insert into user (name,email,password) values ('$username','$email','$password')";
        mysqli_query($con,$query);
    
        header('location:signup.php?flag=1');
    }




?>