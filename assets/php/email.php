
<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$description= $_POST['description'];

$to = "kelliyosantoni23@mail.com";

$subject = "Mail From website prtofolio1";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Description =" . $description;

$headers = "From: noreply@portofolio1.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>