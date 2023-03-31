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
      
      /* background-color: rgba(124, 206, 57,0.5); */
     background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1002%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='rgba(147%2c 217%2c 50%2c 1)'%3e%3c/rect%3e%3cpath d='M0%2c429.36C82.877%2c437.013%2c169.621%2c417.644%2c237.024%2c368.817C302.88%2c321.11%2c329.978%2c240.095%2c363.528%2c166.018C396.973%2c92.173%2c444.086%2c18.049%2c432.209%2c-62.142C420.346%2c-142.237%2c356.235%2c-201.661%2c300.387%2c-260.287C246.853%2c-316.484%2c183.619%2c-356.602%2c115.78%2c-394.312C29.531%2c-442.256%2c-51.689%2c-519.921%2c-149.927%2c-510.604C-251.065%2c-501.012%2c-340.211%2c-428.549%2c-398.743%2c-345.513C-454.852%2c-265.914%2c-451.696%2c-163.297%2c-462.932%2c-66.56C-473.852%2c27.463%2c-514.518%2c131.952%2c-463.456%2c211.653C-412.387%2c291.364%2c-296.153%2c287.246%2c-210.469%2c327.496C-138.466%2c361.319%2c-79.215%2c422.045%2c0%2c429.36' fill='%2377b421'%3e%3c/path%3e%3cpath d='M1440 1133.008C1548.978 1121.4299999999998 1666.326 1112.469 1748.3229999999999 1039.76 1826.858 970.121 1816.502 847.0640000000001 1866.533 754.7909999999999 1921.868 652.737 2056.295 587.448 2056.516 471.358 2056.736 355.90999999999997 1956.35 263.322 1867.6100000000001 189.474 1787.279 122.62400000000002 1683.809 99.97399999999999 1581.981 76.45800000000003 1485.688 54.221000000000004 1387.729 31.326999999999998 1292.185 56.58800000000002 1195.203 82.22899999999998 1123.9859999999999 155.64499999999998 1045.62 218.26799999999997 949.383 295.172 784.306 342.084 780.823 465.225 777.201 593.282 975.794 631.175 1030.666 746.937 1084.2060000000001 859.89 995.553 1024.31 1086.487 1110.077 1174.167 1192.774 1320.149 1145.742 1440 1133.008' fill='%23abe15f'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1002'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
      background-repeat:no-repeat;
      background-size:100% 150%;
      background-attachment:fixed;
    }

    .navbar .img1 {
      width:11%;
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
      margin-left: -38%;
    }
   .container{
    margin-top: -326px;
  padding: 387px;
}

.btn a{
        text-decoration:none;
        color:white;
        font-weight:bold;
      }
      .classdiv{
          margin-top:3%;
          max-width:30%;
          text-align:center;
          margin-left:6%;
          background-color:green;
          font-size:20px;
          line-height:13px;
          padding:15px;
          display:inline-block;
          color:white;
      }
      .alert{
        margin:10%;
        text-align:center;
        font-size:25px;
      }
</style>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: rgba(7, 161, 45, 0.5)">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="img1" src="images/logo5.png" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                <img class="img2" src="images/logotext1.png" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
            </a>
            
        
        <button class="btn btn-warning" ><a href="main.html">LOGOUT</a></button>
        </div>
    </nav>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>


<?php

$bid=$_REQUEST['id'];

include ("connection.php");
$sql1="select * from orders where bid='".$bid."'";
$res1=$conn->query($sql1);
if(mysqli_num_rows($res1)==0)
{
    echo '<div class="alert alert-success" role="alert">
    Sorry!You have not ordered yet
  </div>';
}
else{
    while($row1=mysqli_fetch_assoc($res1))
    {
        $pid=$row1['pid'];
        $qty=$row1['qty'];
        $price=$row1['price'];
        $odate=$row1['odate'];
        $sql2="select pname,name,adno,district,taluk,hobli,pincode from seller,produces where seller.sid=produces.sid and pid=$pid";
        $res2=$conn->query($sql2);
        while($row2=mysqli_fetch_assoc($res2))
        { $pname=$row2['pname'];
            $name=$row2['name'];
            $adno=$row2['adno'];
            $hobli=$row2['hobli'];
            $taluk=$row2['taluk'];
            $district=$row2['district'];
            $pincode=$row2['pincode'];
        }
        ?>
        <div class="classdiv" >
        <p><h1>Ordered Item</h1></p>
        <p>Name&nbsp;:&nbsp;<?php echo $pname;?></p>
        <p>Quantity&nbsp;:&nbsp;<?php echo $qty; ?></p>
        <p>Total Price&nbsp;:&nbsp;<?php echo $price; ?></p>
        <p>OrderDate&nbsp;:&nbsp;<?php echo $odate;?></p>
        <p><h1>Ordered From</h1></p>
        <p><?php echo $name; ?></p>
        <p><?php echo $adno; ?></p>
        <p><?php echo $hobli;?></p>
        <p><?php echo $taluk;?></p>
        <p><?php echo $district;?></p>
        <p><?php echo $pincode;?></p>
    </div>

        

     <?php   
     
    }
}
?>
</body>

</html>