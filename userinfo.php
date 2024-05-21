<?php
$con= mysqli_connect('localhost', 'root' );
if($con){
    echo "connection succesful";
}
else{
    echo "No connection";
}
mysqli_select_db($con, 'ticketreserve');
$user =$_POST['user'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$comments =$_POST['comments'];
$query ="INSERT INTO `userinfodata`(`user`, `email`, `mobile`, `comments`) 
VALUES ('$user','$email','$mobile','$comments')";


echo "$query";
mysqli_query($con, $query);
header("location:index.php");
?>