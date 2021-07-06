<?php 
$con = mysqli_connect("localhost","root","","project");
$uname = $_POST["tf1"];
$pwd = $_POST["tf2"];
$s = "select*from details where username = '$uname' AND password = '$pwd'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    if($uname=='admin')
    {
         header('location:adminpage.html');
    }
    else{
       header('location:home1.html');
    }
}
else
{
    header('location:loginform.html');
}

?>