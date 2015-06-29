<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);
	$reason = trim($_POST["reason"]);

	if ($name == "" OR $email == "" OR $message == "") {
		echo "You must specify a value for name, email address and message.";
		exit;
	}

	foreach ($_POST as $value) {
		if (stripos($value,'Content-Type:') !== FALSE) {
			echo "There was a problem with the information you entered.";
			exit;
		}
	}

	if ($_POST["address"] != "") {
		echo "Your form submission has an error.";
		exit;
	}

	require 'inc/phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	if (!$mail -> ValidateAddress($email)) {
		echo "The email address you entered is not valid.";
		exit;
	}

	$mail->setFrom($email, $name);
	$mail->addAddress('sofrlowi@gmail.com', 'Shirts 4 Mike');
	$mail->Subject = "Shirts 4 Mike Contact Form Submission | $name";
	$mail->msgHTML($email_body);

	//send the message, check for errors
	if (!$mail->send()) {
	    echo "There was a problem sending the email: " . $mail->ErrorInfo;
	    exit;
}

	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "<br>";
	$email_body = $email_body . "Email: ". $email . "<br>";
	$email_body = $email_body . "Message: ". $message . "<br>";
	$email_body = $email_body . "Reason: ". $reason . "<br>";

	header("Location: contact.php?status=thanks");
	exit;
}

$pageTitle = "Contact Mike";
$section = "contact";
?>

<?php include('inc/header.php'); ?>

<div class="section page">
	<div class="wrapper">
		<h1>Contact</h1>

		<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>

			<p>Thanks for the email! I'll be in touch shortly.</p>

		<?php } else { ?>

			<p>I'd love to hear from you! Complete the form to send me an email.</p>

			<form method="post" action="contact.php">

				<table>
					<tr>
						<th>
							<label for="name">Name</label>
						</th>
						<td>
							<input type="text" name="name" id="name">
						</td>
					</tr>
					<tr>
						<th>
							<label for="email">Email</label>
						</th>
						<td>
							<input type="text" name="email" id="email">
						</td>
					</tr>
					<tr>
						<th>
							<label for="Message">Message</label>
						</th>
						<td>
							<textarea name="message" id="message"></textarea>
						</td>
					</tr>
					<tr style="display:none;">
						<th>
							<label for="email">Address</label>
						</th>
						<td>
							<input type="text" name="address" id="address">
							<p>Humans (and frogs): Please leave this field blank.</p>
						</td>
					</tr>
					<tr>
						<th>
							<label for="reason">Reason</label>
						</th>
						<td>
							<select name="reason" id="reason">
								<option value="null">Please choose one:</option>
								<option value="question">General questions</option>
								<option value="complaint">Complaints</option>
								<option value="feedback">Feedback</option>
							</select>
						</td>
				</table>

			<input type="submit" value="Send">

			</form>

	<?php } ?>	

	</div>
</div>

<?php include('inc/footer.php'); ?>