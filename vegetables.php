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
      background-color: rgba(124, 206, 57,0.5);
    }

    .navbar .img1 {
      width:10%;
      height: 20%;
      float: left;
      margin-top: 10px;
      margin-left: 20px;

    }

    .navbar .img2 {

      float: left;
      height: 20%;
      width: 25%;
      margin-left: 10px;
      margin-top: 20px;
    }

    .navbar h1 {
      color: white;
      font-family: cursive;
      margin-left: -38%;
    }
    .cf{
    margin-top: -326px;
  padding: 387px;
}
#searchb{
margin-top:-15%;

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
        </div>
    </nav>
    <div class="container cf">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchtext">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>    
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
<script>
        $(document).ready(function()
        {
            $('#searchtext').keyup(function(){
                var txt=$(this).val();
                if(txt!='')
                {
                    $.ajax({
                        url:"fetchv.php",
                        method:"post",
                        data:{search:txt},
                        dataType:"text",
                        success:function(data)
                        {
                            $('#searchb').html(data);
                        }

                    });

                }
                else{
                    $('#searchb').html('');
                    
                }

            });
        });

        </script>

<?php
include("connection.php");
?>


<?php

$sql1="select pid as pid, pname as name,qty as quantity,unitprice as price,taluk as taluk,district as district from seller S,produces P where S.sid=P.sid and P.category='Vegetables'";
$res1=$conn->query($sql1);
if(mysqli_num_rows($res1)>0)
{
    ?>
    <div class="container" id="searchb">
    <table class="table table-hover table-success table-striped">
        <tr>
            <th>Vegetable Name</th>
            <th>Quantity Avalable</th>
            <th>Unit Price</th>
            <th>Taluk</th>
            <th>District</th>
            <th></th>
</tr>
<?php
while($row=mysqli_fetch_assoc($res1))
{
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['quantity']."</td>";
    echo "<td>".$row['price']."</td>";
    echo "<td>".$row['taluk']."</td>";
    echo "<td>".$row['district']."</td>";
    echo "<td><a href='order.php?id=".$row['pid']."'><button type='button' class='btn btn-success'>Order</button></a></td>";
    echo"</tr>";
   
}
}
else
{
    echo"No Content Avaliable";
}


?>
</div>  