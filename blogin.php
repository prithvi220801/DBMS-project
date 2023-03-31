<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Pacifico&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            border: 0;
        }

        body {
            margin: 0 auto;
            background-image: url("images/img13.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .blogin {
            width: 500px;
            height: 450px;
            text-align: center;
            margin: 0 auto;
            background-color: rgba(44, 62, 80, 0.7);
            border-radius: 4px solid black;
            margin-top: 160px;
        }

        .blogin img {
            width: 130px;
            height: 130px;
            margin-top: -60px;
            margin-right: 30px;
            text-align: center;
            border-radius: 50%;
        }
        .blogin p{
            color:white;
            font-size: 30px;
            text-align: center;
            font-family: 'Handlee', cursive;
        }
        input[type="text"],
        input[type="password"] {
            margin-top: 30px;
            height: 45px;
            width: 300px;
            font-size: 18px;
            margin-bottom: 20px;
            padding-left: 40px;
        }

        .bdlog::before {
            padding-left: 07px;
            padding-top: 40px;
            position: absolute;
            font-size: 35px;
            color: #4c12ec;
        }

        .logbutton {
            padding: 15px 25px;
            border: none;
            background-color: #27ae60;
            color: #fff;
            border-radius: 10%;
        }
    </style>
</head>

<body>
    <div class="blogin">
        <img src="images/buylog.jpeg">
        <form action="" method="post">
            <p>BUYERS LOGIN</p>
            <div class="bdlog">
                <input type="text" name="username" placeholder="Enter your ID">
                <input type="password" name="password" placeholder="Enter your Password">
            </div>
            <input type="submit" name="submit" value="LOGIN" class="logbutton"><br><br>
            <h4 style="color: #fff;">New User?<a href="bregister.php" style="color: rgb(19, 186, 252);">Register!</a></h4>
        </form>
    </div>
</body>

<?php
  if(isset($_POST['submit']))
  {

    $bid=$_POST['username'];
    $pass=$_POST['password'];
  include("connection.php");
  $sql1="select * from buyer where bid='".$bid."' and password='".$pass."'";
  $res1=$conn->query($sql1);
  if(mysqli_num_rows($res1)==0)
  {
      echo"<script>alert('Invalid Credentials')</script>";
      die();
  }
  else
  {

    header("location:buyer.php?id=$bid");

  }

  }
?>

</html>