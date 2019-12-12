<?php
// Check for empty fields
if(empty($_POST['first-name'])  		||
   empty($_POST['email'])	||
   empty($_POST['phone']) 		||
   empty($_POST['pick_post'])	||
   empty($_POST['drop_post']) 		||
   empty($_POST['message']) 		||
   
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Please fill up the form Properly, Maybe you have missed something!";
	return false;
   }

   
$first = $_POST['first'];
$second = $_POST['check'];
$type = implode(', ', $second); //vehicle type

$area = $_POST['type']; // in which area
$third = $_POST['third'];
$fourth = $_POST['fourth'];


// if(!empty($second)) {

//    foreach($_POST['lang'] as $value){
//        echo "value : ".$value.'<br/>';
//    }

// }

$first_name = $_POST['first-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pick_postcode = $_POST['pick_post'];
$drop_postcode = $_POST['drop_post'];
$message = $_POST['message'];

	
// Create the email and send the message

$to = 'tripkeys@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Quote Engine:  $first_name";
$email_body = "You have received a new message from your Vehicle Recovery website Quote Engine .\n\n"."Here are the details:\n\nName: $first_name\n\nPhone: $phone\n\nEmail: $email_address\n\n Pick up Postcode: $pick_postcode \n\n Drop off Postcode: $drop_postcode \n\n\n Here is the Quote Request: \n Type of Work: $first\n Vehicle Type: $type \n Area: $area \n Timeline: $third \n Materials: $fourth ";
$headers = "From: noreply@easy-car-recovery.co.uk\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.

$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);

// echo "<h4>The details have been sent and a member of staff will be in touch shortly!</h4>";

header("Location: ../pages/thank-you.html");
return true;	

?>