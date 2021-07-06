<?php
$con = mysqli_connect("localhost","root","","project");
$fname = $_GET["tf1"];
$sname = $_GET["tf2"];
$mailid = $_GET["tf3"];
$uname = $_GET["tf4"];
$pwd = $_GET["tf5"];
$phonenumber = $_GET["tf6"];
$s = "select * from details where username = '$uname'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    echo"Username already taken please choose another one ";
}
else
{
    $reg = "insert into details (firstname,secondname,mailid,username,password,phonenumber) values ('$fname','$sname','$mailid','$uname','$pwd','$phonenumber')";
    mysqli_query($con,$reg);
    echo"Registration Sucessfull";
    header('location:loginform.html');
}
?>