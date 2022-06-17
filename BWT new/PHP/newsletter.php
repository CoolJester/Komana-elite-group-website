<?php
if (isset($_POST['email'])) {
$email = $_POST['email'];
$to = "info@biowealtecs.co.za, ntsako1616@gmail.com";
$subject = "New Member Joined The Newsletter";
$body = '<html>
		<body>
			<h2>Feedback on new Member</h2>
			<hr/>
			<p>Email:'.$email.'</p>
		</body>
	</html>';

$headers = "From: <".$email.">\r\n";
$headers .= "Replay-to: ".$email."\r\n";
$headers .= "MINE-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8";

$send = mail($to, $subject, $body, $headers);
if ($send ){
	echo "<br>";
	echo "Thanks For Joining Our Newletter.We Will Keep You Up-to-date.";
} else {
	echo 'An error has been detected. Please entering your email again';
}
}
?>