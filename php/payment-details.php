<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  Contact Details Database Connection Page
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php

header('Location: http://localhost/Website/payment-details.html',true);

 $con=new mysqli("127.0.0.1","root","","studentDB");

 if($con->connect_error){
    echo"failed";
}
else{
   echo"successfull";
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  Submit Contact Details
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    $sql="INSERT INTO contact VALUES('$id','$name', '$email' , '$phone','$subject' ,'$message')";
    $con->query($sql);

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  Update Contact Details
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    $sql="UPDATE contact SET id='$id',name='$name', phone='$phone' , message='$message' WHERE email='$email'";
    $con->query($sql);

}

?>
