<?php
if(isset($_POST['submit'])) {

    require 'PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Data recieved from POST request
    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $myQuestion = $_POST['myQuestion'];
    $myRole = $_POST['myRole'];
    date_default_timezone_set('Etc/UTC');


    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->SMTPAuth = true;
    $mail->isSMTP();
    $mail->Host = 'mail.afinley.webhostingforstudents.com';
    $mail->Username ="ace_mailer@afinley.webhostingforstudents.com";
    $mail->Password = "G03779062!";
    $mail->SMTPSecure = "tls";
    $mail->Port = 465;

    $mail->addAddress('amy.finley@pcc.edu', 'Amy Finley');
    $mail->From ="ace_mailer@afinley.webhostingforstudents.com";
    $mail->Subject = 'PHPMailer contact form';
    //Keep it simple - don't use HTML
    $mail->isHTML(true);
    //Build a simple message body
    $mail->MsgHTML("Name:" . $myName . "<br /><br />Email:" . $myEmail. "<br /><br />Role:" . $myRole. "<br /><br />" . $myQuestion);

    $message = "";
    if(!$mail->Send()) {
        $message = "Mailer Error: " . $mail->ErrorInfo;
    } else {
        include 'success.html.php';
    }
} else {
    include 'contact.html.php';
}
?>