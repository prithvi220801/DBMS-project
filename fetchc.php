<?php
include("connection.php");
$sql1="select pid as pid, pname as name,qty as quantity,unitprice as price,taluk as taluk,district as district from seller S,produces P where S.sid=P.sid and P.category='Crops' and pname like '%".$_POST['search']."%'";
$res1=$conn->query($sql1);
$output='';
if(mysqli_num_rows($res1)>0)
{
   $output.=' <div class="container" id="searchb">
    <table class="table table-hover table-success table-striped">
        <tr>
            <th>Crop Name</th>
            <th>Quantity Avalable</th>
            <th>Unit Price</th>
            <th>Taluk</th>
            <th>District</th>
            <th></th>
</tr>';
while($row=mysqli_fetch_assoc($res1))
{
    $output.="<tr>
    <td>".$row['name']."</td>
    <td>".$row['quantity']."</td>
    <td>".$row['price']."</td>
    <td>".$row['taluk']."</td>
    <td>".$row['district']."</td>
    <td><a href='order.php?id=".$row['pid']."'><button type='button' class='btn btn-success'>Order</button></a></td></tr>";
   
}
echo $output;

}
else
{
    echo "No Results Found";
}