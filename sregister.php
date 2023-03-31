<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Form-v7 by Colorlib</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <style>
        body {
            margin: 0;
        }

        .page-content {
            width: 100%;
            margin: 0 auto;
            /* background-image: -moz-linear-gradient(136deg, rgb(254, 225, 64) 0%, rgb(250, 112, 154) 100%);
            background-image: -webkit-linear-gradient(136deg, rgb(254, 225, 64) 0%, rgb(250, 112, 154) 100%);
            background-image: -ms-linear-gradient(136deg, rgb(254, 225, 64) 0%, rgb(250, 112, 154) 100%);*/
            display: flex;
            display: -webkit-flex;
            justify-content: center;
            -o-justify-content: center;
            -ms-justify-content: center;
            -moz-justify-content: center;
            -webkit-justify-content: center;
            align-items: center;
            -o-align-items: center;
            -ms-align-items: center;
            -moz-align-items: center;
            -webkit-align-items: center;
            background-color: rgba(120, 230, 87, 0.25);
        }

        .form-v7-content {
            width: 910px;
            margin: 175px 0;
            font-family: 'Open Sans', sans-serif;
            position: relative;
            display: flex;
            display: -webkit-flex;
        }

        .form-v7-content .form-left {
            position: relative;
            color: #fff;
            font-weight: 400;
            width: 92.5%;
            margin-top: 32px;
        }

        .form-v7-content .form-left img {
            width: 100%;
            height: 95%
        }

        .form-v7-content .form-left .text-1,
        .form-v7-content .form-left .text-2 {
            position: absolute;
            text-align: center;
            width: 100%;
        }

        .form-v7-content .form-left .text-1 {
            font-size: 38px;
            top: 1.5%;
        }

        .form-v7-content .form-left .text-2 {
            font-size: 16px;
            bottom: 11%;
        }

        .form-v7-content .form-left .text-2::after {
            position: absolute;
            content: "";
            background: #fff;
            height: 1px;
            width: 228px;
            bottom: -50%;
            left: 50%;
            transform: translateX(-50%);
            -o-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            opacity: 0.5;
        }

        .form-v7-content .form-detail {
            padding: 73px 80px 41px;
            position: relative;
            width: 100%;
            background: #fff;
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.9);
            -o-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -ms-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        }

        .form-v7-content .form-detail .form-row {
            width: 100%;
            position: relative;
        }

        .form-v7-content .form-detail .form-row label {
            color: #666;
            font-weight: 600;
            font-size: 13px;
            margin-bottom: 3px;
            font-family: 'Open Sans', sans-serif;
        }

        .form-v7-content .form-detail .form-row label#valid {
            position: absolute;
            right: 20px;
            top: 35%;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            -o-border-radius: 50%;
            -ms-border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            background: #53c83c;
        }

        .form-v7-content .form-detail .form-row label#valid::after {
            content: "";
            position: absolute;
            left: 5px;
            top: 1px;
            width: 3px;
            height: 8px;
            border: 1px solid #fff;
            border-width: 0 2px 2px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .form-v7-content .form-detail .form-row label.error {
            padding-left: 0;
            margin-left: 0;
            display: block;
            position: absolute;
            bottom: 5px;
            width: 100%;
            background: none;
            color: red;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
        }

        .form-v7-content .form-detail .form-row label.error::after {
            content: "\f343";
            font-family: "LineAwesome";
            position: absolute;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            right: 10px;
            top: -25px;
            color: red;
            font-size: 18px;
            font-weight: 900;
        }

        .form-v7-content .form-detail .input-text {
            margin-bottom: 28px;
        }

        .form-v7-content .form-detail input {
            width: 100%;
            padding: 5px 15px 10px 15px;
            border: 2px solid transparent;
            border-bottom: 2px solid #e5e5e5;
            appearance: unset;
            -moz-appearance: unset;
            -webkit-appearance: unset;
            -o-appearance: unset;
            -ms-appearance: unset;
            outline: none;
            -moz-outline: none;
            -webkit-outline: none;
            -o-outline: none;
            -ms-outline: none;
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            font-weight: 700;
            color: #333;
            box-sizing: border-box;
            -o-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        .form-v7-content .form-detail .form-row input:focus {
            border-bottom: 2px solid #2bb33e;
        }

        .form-v7-content .form-detail .register {
            background: #373be3;
            border-radius: 4px;
            -o-border-radius: 4px;
            -ms-border-radius: 4px;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            width: 180px;
            border: none;
            margin: -13px 0 50px 0px;
            cursor: pointer;
            font-family: 'Open Sans', sans-serif;
            color: #fff;
            font-weight: 700;
            font-size: 15px;
            float: left;
        }

        .form-v7-content .form-detail .register:hover {
            background: #2a2cb0;
        }

        .form-v7-content .form-detail .form-row-last {
            margin-top: 35px;
        }

        .form-v7-content .form-detail .form-row-last input {
            padding: 15px;
        }

        .form-v7-content .form-detail .form-row-last p {
            font-weight: 600;
            font-size: 14px;
            color: #666;
            margin-left: 200px;
        }

        .form-v7-content .form-detail .form-row-last a {
            font-size: 16px;
            color: #373be3;
            padding-left: 15px;
        }

        /* Responsive */
        @media screen and (max-width: 991px) {
            .form-v7-content {
                margin: 180px 20px;
                flex-direction: column;
                -o-flex-direction: column;
                -ms-flex-direction: column;
                -moz-flex-direction: column;
                -webkit-flex-direction: column;
            }

            .form-v7-content .form-left {
                width: 100%;
                margin-bottom: -5px;
            }

            .form-v7-content .form-detail {
                padding: 50px;
                width: auto;
            }

            .form-v7-content .form-detail .register {
                margin-bottom: 80px;
            }
        }
    </style>
</head>

<body class="form-v7">
    <div class="page-content">
        <div class="form-v7-content">
            <div class="form-left">
                <img src="images/regpic.jpeg" alt="form">
                <p class="text-1">Register</p>
                <p class="text-2">Privacy policy & Term of service</p>
            </div>
            <form class="form-detail" action="" method="post" id="myform" enctype="multipart/form-data">
                
                <div class="form-row">
                    <label for="username">SELLER ID</label>
                    <input type="text" name="sid" id="bid" class="input-text">
                </div>
                <div class="form-row">
                    <label for="username">NAME</label>
                    <input type="text" name="username" id="username" class="input-text">
                </div>
                <div class="form-row">
                    <label for="your_email">E-MAIL</label>
                    <input type="text" name="email" id="email" class="input-text" required
                        pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                </div>
                <div class="form-row">
                    <label for="password">PASSWORD</label>
                    <input type="password" name="password" onchange="validate(this.value)" id="password" class="input-text" required
                        placeholder="Create password">
                        <div id="divp" style="color:red"></div>
                </div>
                <div class="form-row">
                    <label for="comfirm_password">CONFIRM PASSWORD</label>
                    <input type="password" name="confirm_password" id="comfirm_password" class="input-text" required>
                </div>
                <div class="form-row">
                    <label for="username">CONTACT NUMBER</label>
                    <input type="text" name="phno" id="username" class="input-text">
                </div>
                <div class="form-row">
                    <label for="username">ADHAAR NUMBER</label>
                    <input type="text" name="adhar" id="username" class="input-text" placeholder="XXXX-XXXX-XXXX">
                </div>
                <div class="form-row">
                    <label for="username">ADDRESS:</label><br><br>
                    <label for="username">STREET/LANE/DOOR NUMBER</label>
                    <input type="text" name="strno" id="username" class="input-text">
                    <label for="username">HOBLI</label>
                    <input type="text" name="hobli" id="username" class="input-text">
                    <label for="username">TALUK</label>
                    <input type="text" name="taluk" id="username" class="input-text">
                    <label for="username">DISTRICT</label>
                    <input type="text" name="district" id="username" class="input-text">
                    <label for="username">PINCODE</label>
                    <input type="text" name="pincode" id="username" class="input-text">
                </div>
                <div class="form-row">
                    <label for="username">UPLOAD RTC</label>
                    <input type="file" name="filertc" id="filertc" class="input-text" placeholder="">
                </div>
                <div class="form-row-last">
                    <input type="submit" name="submit" class="register" value="Register">
                    <p>Or<a href="slogin.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script>
        function validate(str)
        {
            if(str.length<8)
            {
                document.getElementById("divp").innerHTML="Password should have minimum eight characters";
            }
            else if(str.search(/[a-z]/g)<0)
            {
                document.getElementById("divp").innerHTML="Password should have atleat one lowercase letter";
            }
            else if(str.search(/[A-Z]/g)<0)
            {
                document.getElementById("divp").innerHTML="Password should have atleast one uppercase letter";
            }
            else if(str.search(/[0-9]/i)<0)
            {
                document.getElementById("divp").innerHTML="Password should have a digit";
            }
            else
            {
                document.getElementById("divp").innerHTML="";
            }
        }
        </script>
    <?php
           include("connection.php");
           if(isset($_POST['submit'])  && !empty($_FILES["filertc"]))
           {$targetdir="uploads/";
            $filename=$_FILES["filertc"]["name"];
            $targetfilepath=$targetdir.$filename;
            $filetype=pathinfo($targetfilepath,PATHINFO_EXTENSION);
            $tempname=$_FILES["filertc"]["tmp_name"];
            move_uploaded_file($tempname,$targetfilepath);




               $sid=$_POST['sid'];
               $name=$_POST['username'];
               $email=$_POST['email'];
               $pass=$_POST['password'];
               $cpass=$_POST['confirm_password'];
               $phno=$_POST['phno'];
               $adhar=$_POST['adhar'];
               $strtno=$_POST['strno'];
               $hobli=$_POST['hobli'];
               $taluk=$_POST['taluk'];
               $district=$_POST['district'];
               $pincode=$_POST['pincode'];
               $sql1="select * from seller where sid='".$sid."'";
               $res1=$conn->query($sql1);
              
               if(mysqli_num_rows($res1)>0)
               {
                   echo"<script>alert('Buyer Id already exists choose another bid')</script>";
                   die();

               }
               $sql2="select * from seller where email='".$email."'";
               $res2=$conn->query($sql2);
               
               if(mysqli_num_rows($res2)>0)
               {
                echo"<script>alert('Email already registered')</script>";
                die();
               }
               if($pass!=$cpass)
               {
                echo"<script>alert('Passwords Do Not Match')</script>";
                die();

               }
                $sql4="insert into seller values('".$sid."','".$name."','".$email."','".$pass."',".$phno.",".$adhar.",".$strtno.",'".$hobli."','".$taluk."','".$district."',".$pincode.",'".$filename."')";
                $res4=$conn->query($sql4);
                if($res4)
                {
                    echo"<script>alert('Successfully Registered')</script>";
                    echo "<script type='text/javascript'> window.location='slogin.php'; </script>";
                }

           }

        ?>