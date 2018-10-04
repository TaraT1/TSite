<!-- Fromhttp://tangledindesign.com/how-to-create-a-contact-form-using-html5-css3-and-php/  -->
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'From: YourWebsite';
$to = 't@TaraThierry.com';
$subject = 'Hello';
$human = $_POST['human'];
$thankyou = 'contact.html';

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit'] && $human == '4') {
	if (mail ($to, $subject, $body, $from)) {
		echo '<p> Your message has been sent</p>';
	} else {
		echo '<p>Something went wrong, please go back and try again!</p>';
	}
	} else if ($_POST['submit'] && $human != '4') {
		echo "<p>There's a problem with your anti-spam response.</p>";
	}
	else {
		echo '<p>Please fill in the remaining fields.</p>';
}
}

?>
<!--<script>location.replace('') </script>-->



