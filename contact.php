<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'From: YourWebsite';
$to = 'your@mail.com';
$subject = 'Hello';
$thankyou = 'YourContactsite.html';

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit']) {
if (mail ($to, $subject, $body, $from)) {
echo '';
} else {
echo 'Something went wrong, go back and try again!';
}
}
?>
//<script>location.replace('') </script>-->

<!-- Fromhttp://tangledindesign.com/how-to-create-a-contact-form-using-html5-css3-and-php/  -->
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Contact Form</title>
	</head>
	<body>
	    <header class="body">
	    </header>
		<section class="body">
		    
		<form method="post" action="index.php">
		        
		    <label>Name</label>
		    <input name="name" placeholder="Type Here">
		            
		    <label>Email</label>
		    <input name="email" type="email" placeholder="Type Here">
		            
		    <label>Message</label>
		    <textarea name="message" placeholder="Type Here"></textarea>
		            
		    <input id="submit" name="submit" type="submit" value="Submit">
		        
		</form>

		</section>
	<footer class="body">
	    </footer>



	</body>
</html>


<!-- The php fromhttp://tangledindesign.com/how-to-create-a-contact-form-using-html5-css3-and-php/ 
(Using comments corrected code) -->

