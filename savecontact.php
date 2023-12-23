 <?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "clearbyservices@gmail.com";
// $subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n subject =" . $subject . "\r\n Message =" . $message;
$headers = "From:  clearbyservices@clearbyservices.com " . "\r\n" .
"CC: hello@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:thankyou.html");

?> 	