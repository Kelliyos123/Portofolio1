
<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$textarea= $_POST['textarea'];

$to = "kelliyosantoni23@mail.com";
$subject = "Mail From website prtofolio1";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Textarea =" . $textarea;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>