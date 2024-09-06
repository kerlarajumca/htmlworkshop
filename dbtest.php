<?php
$server="sql107.infinityfree.com:3306";
$user="if0_37254738";
$password="NHW3X2wHDWho";
$db="if0_37254738_vce";
if($conn=mysqli_connect($server,$user,$password,$db))
{
   //echo "Connected succesfully to MySql";

   $sqlqry="select * from users";
   $execqry=mysqli_query($conn,$sqlqry);
   while($row=mysqli_fetch_array($execqry))
   {
       echo "User Name:".$row[1];
       echo "Password:".$row[2];
       echo "<br>";
   }
}
else
{
    echo mysqli_error($conn);
}
?>