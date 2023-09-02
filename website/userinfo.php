
<?php
$con=mysqli_connect('localhost','root');

if($con)
{
    echo "Connection succeeful ";
}
else{
    echo "No connection";
}

mysqli_select_db($con,'login');

$name=$_POST['Fullname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$query="insert INTO userinfodata (name,mobile,email,subject,message) VALUES ('$name', '$mobile', '$email','$subject','$message')";

mysqli_query($con,$query);
 
mysqli_close($con);

header('location:index.php');
?>