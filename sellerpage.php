<?php
$sid=$_REQUEST['id']

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <title>Sellers Page</title>
  <style>
    body {
      background-color: rgb(187, 245, 197);
    }

    .navbar .img1 {
      width: 11%;
      height: 20%;
      float: left;
      margin-top: 10px;
      margin-left: 20px;

    }

    .navbar .img2 {

      float: left;
      height: 20%;
      width: 35%;
      margin-left: 10px;
      margin-top: 10px;
    }

    .navbar h1 {
      color: white;
      font-family: cursive;
      margin-left: -48%;
      font-weight:bold;
    }

    .get-in-touch {
      max-width: 800px;
      margin: 50px auto;
      position: relative;
    }

    .contact-form .form-field {
      position: relative;
      margin: 32px 0;
    }

    .contact-form .input-text {
      display: block;
      width: 100%;
      height: 36px;
      border-width: 0 0 2px 0;
      border-color: #25db96;
      font-size: 18px;
      line-height: 26px;
      font-weight: 400;
    }

    .contact-form textarea {
      display: block;
      width: 100%;
      height: 36px;
      border-width: 0 0 2px 0;
      border-color: #25db96;
      font-size: 18px;
      line-height: 28px;
      font-weight: 400;
    }

    .contact-form .input-text:focus {
      outline: none;
    }

    .contact-form .input-text:focus+.label,
    .contact-form .input-text.not-empty+.label {
      -webkit-transform: translateY(-24px);
      transform: translateY(-24px);
    }

    .contact-form .label {
      position: absolute;
      left: 20px;
      bottom: 11px;
      font-size: 18px;
      line-height: 26px;
      font-weight: 400;
      
      color: #5543ca;
      cursor: text;
      transition: -webkit-transform .2s ease-in-out;
      transition: transform .2s ease-in-out;
      transition: transform .2s ease-in-out,
        -webkit-transform .2s ease-in-out;
    }

    .contact-form .submit-btn {
      display: inline-block;
      background-color: #000;
      background-image: linear-gradient(125deg, #23d33a, #24d88d);
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 16px;
      padding: 8px 16px;
      border: none;
      width: 200px;
      cursor: pointer;
    }
      .wrapper{
        height: 35px;
        min-width: 380px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #FFF;
        border-radius: 4px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
      }

      .wrapper span {
        width: 100%;
        text-align: center;
        font-size: 38px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
      }

      .wrapper span.num {
        font-size: 28px;
        border-right: 2px solid rgba(0, 0, 0, 0.2);
        border-left: 2px solid rgba(0, 0, 0, 0.2);
        pointer-events: none;
      }
      select{
        padding:1%;
      }
      .btn a{
        text-decoration:none;
        color:white;
        font-weight:bold;
      }
  </style>
</head>

<body>
  <nav class="navbar navbar-light" style="background-color: rgba(10, 231, 84, 0.5)">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="img1" src="images/logo5.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        <img class="img2" src="images/logotext1.png" alt="" width="30" height="24"
          class="d-inline-block align-text-top">
      </a>
      <h1>SELLERS PAGE</h1>
     
        <!--input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"-->
        
        <button class="btn btn-warning" style="margin-right:-394px" ><a href="sellerorders.php?id=<?php echo $sid;?>">MY BUYERS</a></button>
        <button class="btn btn-success" ><a href="main.html">LOGOUT</a></button>
      
    </div>
  </nav>
  <section class="get-in-touch">
    <form class="contact-form row" method="post" action="">
      <div class="form-field col-lg-12">
        <label class="label" for="name">Category</label>
        <select class="form-select" aria-label="Default select example" name="category">
          <option value="Product">Product</option>
          <option value="Crops">Crops</option>
          <option value="Seeds">Seeds</option>
          <option value="Fruits">Fruits</option>
          <option value="Spices">Spices</option>
          <option value="Greens">Greens</option>
          <option value="Vegetables">Vegetables</option>
        </select>
      </div>
      <div class="form-field col-lg-12 ">
        <input id="company" class="input-text js-input" type="text" required name="pname">
        <label class="label" for="company">Product/Produce Name</label>
      </div>
      <!--<div class="form-field col-lg-6 ">
        <input id="email" class="input-text js-input" type="text" required>
        <label class="label" for="email">SID</label>
      </div>-->
      <div class="form-field col-lg-6 ">
        <input id="company" class="input-text js-input" type="number" required name="unitprice">
        <label class="label" for="company">Unit Price</label>
      </div>
      <div class="form-field col-lg-6 ">
      <input id="phone" class="input-text js-input" type="number" required name="quantity">
        <label class="label" for="phone">Quantity</label>
       <!--div class="wrapper">
          <span class="minus">-</span>
          <span class="num">01</span>
          <span class="plus">+</span>
        </div>
        <script>
          const plus = document.querySelector(".plus"),
            minus = document.querySelector(".minus"),
            num = document.querySelector(".num");
          let a = 1;
          plus.addEventListener("click", () => {
            a++;
            a = (a < 10) ? "0" + a : a;
            num.innerText = a;
          });

          minus.addEventListener("click", () => {
            if (a > 1) {
              a--;
              a = (a < 10) ? "0" + a : a;
              num.innerText = a;
            }
          });

        </script-->
      </div>
      <div class="form-field col-lg-12">

        <textarea class="form-control" id="textAreaExample3" rows="5" name="description"></textarea>
        <label class="label" for="message">Description</label>
      </div>
      <div class="form-field col-lg-12">
        <input class="submit-btn" type="submit" value="Submit" name="submit">
      </div>
    </form>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
</body>

</html>
<?php
if(isset($_POST['submit']))
{





$cat=$_POST['category'];
$pname=$_POST['pname'];
$val=$_POST['quantity'];
$det=$_POST['description'];
$uprice=$_POST['unitprice'];

include("connection.php");
$sql1="insert into produces(sid,category,pname,qty,unitprice,description) values('$sid','$cat','$pname',$val,$uprice,'$det')";
$res1=$conn->query($sql1);
if(!$res1)
{
  echo $conn->error;
}
else
{
  echo"<script>alert('Successfully inserted')</script>";

}




}

?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>