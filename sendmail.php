<?php 
$name=$_POST['name'];
$firstname=$_POST['firstname'];
$dob=$_POST['dob'];
$begin_date=$_POST['begin_date'];
$end_date=$_POST['end_date'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$zipcode=$_POST['zipcode'];
$signature=$_POST['sig'];

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
    $mail->CharSet = "utf-8";                   // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '';    // SMTP username
    $mail->Password   = '';    // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('', 'Mazharul'); // SMTP username
    $mail->addAddress('', 'Robin');     // Add a recipient
    $mail->addAddress('');               // Name is optional
    $mail->addReplyTo('', 'Information'); // SMTP username
    $mail->addCC(''); // SMTP username
    $mail->addBCC(''); // SMTP username

	$attach_parameter = explode(",",$signature);

    $mail->AddStringAttachment(base64_decode($attach_parameter[1]),'signature.png');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Form Email';
    $mail->Body    = '<table border="1">
    <tbody>
    <tr>
    		<td colspan="2">All Form Data</td>
    	</tr>
    	<tr>
    		<td>Name</td>
    		<td>"'.$name.'"</td>
    	</tr>
    	<tr>
    		<td>Firstname</td>
    		<td>"'.$firstname.'"</td>
    	</tr>
    	<tr>
    		<td>Birth date</td>
    		<td>"'.$dob.'"</td>
    	</tr>
    	<tr>
    		<td>Date of beginning</td>
    		<td>"'.$begin_date.'"</td>
    	</tr>
    	<tr>
    		<td>Date of ending</td>
    		<td>"'.$end_date.'"</td>
    	</tr>
    	<tr>
    		<td>Address</td>
    		<td>"'.$address.'"</td>
    	</tr>
    	<tr>
    		<td>City</td>
    		<td>"'.$city.'"</td>
    	</tr>
    	<tr>
    		<td>Zipcode</td>
    		<td>"'.$zipcode.'"</td>
    	</tr>
    	<tr>
    		<td>Country</td>
    		<td>"'.$country.'"</td>
    	</tr>

    </tbody>
    </table>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}