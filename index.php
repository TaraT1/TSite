<!-- Fromhttp://tangledindesign.com/how-to-create-a-contact-form-using-html5-css3-and-php/  -->
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
echo 'Something went wrong, please go back and try again!';
}
}
?>
<script>location.replace('') </script>

