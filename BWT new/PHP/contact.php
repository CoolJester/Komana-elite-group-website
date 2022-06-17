<?php
    $name = $_POST['username'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'BioWealTecs Contact || Page';

    $email_subject = "New Contact Form Submission";

    $email_body = "Name of user :  $name.\r\n".
                    "User Email : $visitor_email.\r\n".
                        "Intent : $subject.\r\n".
                            "User Message : $message.\r\n";

    $to = "ntsako1616@gmail.com";

    $headers = "From : $email_from \r\n";
    $headers = "Reply-To: $visitor_email \r\n";
    $headers .= "MINE-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8";

    $send = mail($to, $email_subject, $email_body,$headers);

    if ($send ){
	echo "<br>";
	echo "Thanks For Contacting Us We'll do our best to responed to your request as soon Possible.";
} else {
	echo 'An error has been detected. Please try again later.';
}

    header("Location: ./Contact.html");
?>