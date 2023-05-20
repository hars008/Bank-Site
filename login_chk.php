<?php
include('conn.php');
session_start();
$u_name=$_POST["u_name"];
$pwd=$_POST["pwd"];

$sql="select * from master_login where userid='$u_name' and passwd='$pwd'";
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
$_SESSION['userid']=$result['userid'];
header('location:dashboard.php');
}
else
{
header('location:login.html');
echo "conection failed";
}
?>