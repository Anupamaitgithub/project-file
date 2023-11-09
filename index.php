<?php
include("db.php");
$Name=$_POST['name'];
$Phone=$_POST['phone'];
$Email=$_POST['email'];
$Subject=$_POST['subject'];
$Message=$_POST['msg'];
if(strlen($Phone)!='10')

{
    echo "Phone Number must be 10 digit ";
    die;
}
$q="select *from contact_form where email='$Email'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num >0)
{
    echo "Email allready signed";
    die;

}
$qry1="select *from contact_form where phone='$Phone'";
$result1=mysqli_query($con,$qry1);
$num1=mysqli_num_rows($result1);
if($num1 >0)
{
    echo "Phone number is allready exist";
    die;
    
}
else{
$qry="insert into contact_form(name,phone,email,subject,msg)values('$Name','$Phone','$Email','$Subject','$Message')";


$result=mysqli_query($con,$qry);
if($result==TRUE)
{
    $Email="au534612@gmail.com";
    $subject="Submission Successful";
    $message="Thanks For Contact";
    $header="From:anupamakumari0140@gmail.com";
    $header .="content-type: text/html";
    $mail=mail($Email,$subject,$message,$header);



    
}
if($mail==true)
{
echo "SUCCESS";
}
else
{
    echo "ERROR";
}
}

?>
