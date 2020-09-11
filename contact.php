<?php
 include 'dashboard/jayant/include/dbcon.php';

$msg="";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['message'])){
    $name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	$message=mysqli_real_escape_string($con,$_POST['message']);
	
	mysqli_query($con,"insert into contact(name,email,mobile,message) values('$name','$email','$mobile','$message')");
	$msg="Thanks for contacting me. I'll get back to you soon..";
	
	$html="Thanks For Contacting Me.. I'll get back to you as soon as possible.</br></br></br><h3>Your Details</h3><table><tr><td>Name</td><td>$name</td></tr><tr><td>Message:</td><td>$message</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="sharma97.jayant@gmail.com";
	$mail->Password="@CS_2k16";
	$mail->SetFrom("sharma97.jayant@gmail.com");
	$mail->addAddress($email);
	$mail->IsHTML(true);
	$mail->Subject="Thanks for contacting me";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	echo $msg;
}
?>