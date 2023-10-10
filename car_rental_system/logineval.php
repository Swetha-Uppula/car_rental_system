<?php
$connect=mysqli_connect('localhost','root','','test');
$un=$_POST['email'];
$pwd=$_POST['password'];
$query=mysqli_query($connect,"select * from login where username='".$un."' and password='".$pwd."'");
$nr=mysqli_fetch_row($query);
if($nr)
header('Location: payment.html');
else
{
echo '<script type="text/javascript">
window.location.href="loginfb.html";
alert("Invalid username or password ");
</script>';
}

?>