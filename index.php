<?php
/**
 * This example shows how to handle a simple contact form.
 */

$msg = '';
//Don't run this unless we're handling a form submission
if (isset($_POST['myName'])) {
    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $myQuestion = $_POST['myQuestion'];
    $myRole = $_POST['myRole'];
    date_default_timezone_set('Etc/UTC');

    require 'PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer();
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'mail.afinley.webhostingforstudents.com';
    $mail->Port = 465;
    //Set this to true if SMTP host requires authentication to send mail
    $mail->SMTPAuth = true;
    //Provide username and password
    $mail->Username ="ace_mailer@afinley.webhostingforstudents.com";
    $mail->Password = "G03779062!";

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('ace_mailer@afinley.webhostingforstudents.com', 'Amy Finley');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('amy.finley@pcc.edu', 'Amy Finley');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $mail->addReplyTo($myEmail, $myName);
    $mail->Subject = 'PHPMailer contact form';
    //Keep it simple - don't use HTML
    $mail->isHTML(true);
    //Build a simple message body
    $mail->Body = <<<EOT
Email: $myEmail <br>
Name: $myName <br>
Role: $myRole <br>
Message: $myQuestion
EOT;
    //Send the message, check for errors
    if (!$mail->send()) {
        //The reason for failing to send will be in $mail->ErrorInfo
        //but you shouldn't display errors to users - process the error, log it on your server.
        echo "Mail error" . $mail->ErrorInfo;
    } else {
        include 'success.html.php';
    }
} else {
    include 'contact.html.php';
}
