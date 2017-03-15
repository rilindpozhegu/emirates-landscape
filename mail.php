<?php



require 'vendor/autoload.php';
   date_default_timezone_set('Europe/Belgrade');

 $subjectEmail = 'Mail from'.' '.$_POST['email'];
//CAPTCHA Matching code
if(session_id() == '') {
    session_start();
}

if ($_SESSION["code"] == $_POST["captcha"] && session_id() != '') {

	$bodyMail ='<label><b>Full Name: </b></label>'.$_POST['name'].'<br>'. 
            '<label><b>Phone: </b></label>'.$_POST['phone'].'<br>'.
              '<label><b>Description: </b></label>'.$_POST['description'].'<br>';

              $transport = Swift_SmtpTransport::newInstance('secure.emailsrvr.com', 'tls', 587)
  ->setUsername('info@emirateslandscape.com')  
  ->setPassword('Sacha');

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance($subjectEmail)
  ->setFrom(array($_POST['email'] => 'emirateslandscape.com'))
  ->setTo(array('info@emirateslandscape.com' => ''))
  ->setBody($bodyMail, 'text/html');

// Send the message
$result = $mailer->send($message);

    echo "success";

   
} else {
    die("wrong");
}
?>
