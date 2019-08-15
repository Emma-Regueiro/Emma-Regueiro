<?php
// Variables
/*
*SendMail: by fb.com/nurealamsabbir
*/
$name = trim($_POST['nom']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);
$select_industry = trim($_POST['']);
// $subject= trim($_POST['subject']);
$subject = 'Message';
if(!$subject) {
    $subject = 'Message de la part de';
}
$to = "regueiroemma@gmail.com"; // Change with your email address
//echo "{$to}";
if( isset($name) && isset($email) ) {

	// Avoid Email Injection and Mail Form Script Hijacking
	$pattern = "/(content-type|bcc:|cc:|to:)/i";
	if( preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $message) ) {
		exit;
	}
	// Email will be send
	
//Must end on first column
	
	$headers = "From: $name <$email>\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// PHP email sender
	mail($to, $sub, $body, $headers);

	// PHP email sender
  if(mail( "regueiroemma@gmail.com", $_POST['subject'], $_POST['message'], $headers )){
    echo "Merci, j'ai bien reçu votre message.";
  }
  else {
    echo "L'Email ne semble pas s'envoyer, veuillez essayer plus tard.";
  }
  //  Replace with your email 
  return false;
}

?>

