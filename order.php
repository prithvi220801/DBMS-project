<?php
session_start();
$id=$_SESSION['bid'];
session_abort();


?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
 
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <title>Sellers Page</title>
  <style>
    body {
      background-color: rgba(124, 206, 57,0.5);
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
.card{
    margin: 2% 0% 0% 35%;
   
    justify-content:center;
    text-align:center;
}
.card p{
    font-size:20px;
    
}
.card-header{
    font-size:30px;
}
.cclass{
  justify-content:center;
  align-items:center;
  font-size:20px;
  text-align:center;
  font-weight:800;
}
.alert{
  margin-top:-12%;
  max-width:45rem;
  margin-left:25%;
}
.btn a{
  color:white;
  font-size:20px;
  font-weight:bold;
  text-decoration:none;
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
            <button class="btn btn-success" style="margin-right:-600px;"><a href="main.html">LOGOUT</a></button>
            <button class="btn btn-warning"  ><a href="buyerorders.php?id=<?php echo $id;?>">MY ORDERS</a></button>
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
</body>
</html>
<?php
$pid=$_REQUEST['id'];
include("connection.php");
$sql1="select pname,qty,unitprice,description,name,adno,hobli,taluk,district,pincode from seller ,produces where seller.sid=produces.sid and pid=$pid";
$res1=$conn->query($sql1);
while($row1=mysqli_fetch_assoc($res1))
{
    $qty=$row1['qty'];
    $p=$row1['unitprice'];
    $name=$row1['pname'];



?>
<div class="card text-white bg-success mb-3" style="max-width: 38rem;">
  <div class="card-header">Order Details</div>
  <div class="card-body">
 
<h1>About The Order</h1>
<p>Name&nbsp;:&nbsp; <?php echo $row1['pname']; ?></p>
<p>Quantity Available&nbsp;:&nbsp; <?php echo $row1['qty']; ?></p>
<p>Unit Price&nbsp;:&nbsp; <?php echo $row1['unitprice']; ?></p>
<p>Description &nbsp;:&nbsp;<?php echo $row1['description']; ?></p>
<h1>About the seller</h1>
<p>Name&nbsp;:&nbsp; <?php echo $row1['name']; ?></p>
<p>Address&nbsp;:&nbsp; <?php echo $row1['adno']; ?><br><?php echo $row1['hobli']; ?><br><?php echo $row1['taluk']; ?><br><?php echo $row1['district']; ?><br>
<?php echo $row1['pincode']; ?><br></p>
<?php
}
?>


<form action="" method="post">
    Quantity required:<input type="number" name="qnty">
    <input type="submit" name="submit" value="order">
</form>
</div>
</div>
<div class="container cclass">
<?php
if(isset($_POST['submit']))
{
    $qnty=$_POST['qnty'];
    if($qnty>$qty)
    {
        echo '<div class="alert alert-danger" role="alert">
        Requested Quantity not available
      </div>';
    }
    else{
        $totalprice=(int)$qnty*(int)$p;
        echo '<div class="alert alert-success" role="alert">
        Order Successful
      </div>';

?>



    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  View Order Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <p>Ordered Product&nbsp;:&nbsp; <?php echo $name;?></p>
          <p>No Of Units&nbsp;:&nbsp; <?php echo $qnty;?></p>
          <p>Total price&nbsp;:&nbsp; Rs <?php echo $totalprice;?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!--button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div>
  </div>
</div>
<?php


        $new=(int)$qty-(int)$qnty;
        if($new==0)
        {
        $sql2="delete from produces where pid=$pid";
        $res2=$conn->query($sql2);


        
    }
    else
    {
       $sql3="update produces set qty=$new where pid=$pid";
        $res3=$conn->query($sql3);
        $qnty=(int)$qnty;
        $sql4="insert into orders(pid,bid,qty,price,odate) values ($pid,'$id',$qnty,$totalprice,curdate())";
        $res4=$conn->query($sql4);

    }
}
}
?>
</div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>





