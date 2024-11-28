

<?php

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);

try {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the data sent via AJAX
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    $mail->isSMTP();                                      // Send using SMTP
    $mail->Host       = 'mmtp.iitk.ac.in';               // Set SMTP server
    $mail->SMTPAuth   = true;                             // Enable SMTP authentication
    $mail->Username   = 'dhs@iitk.ac.in';         // SMTP username
    $mail->Password   = 'Har@aman1234';            // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // Enable SSL encryption
    $mail->Port       = 25;                              // TCP port for SSL
    $mail->SMTPDebug = 2;  // Set to 2 for detailed debugging output
    $mail->Debugoutput = 'html';  // Output debug info in HTML format

    // Recipients
    $mail->setFrom('dhs@iitk.ac.in', 'Digital Health Stack');
    $mail->addAddress($email, $name); // Add a recipient
    // $mail->addBCC('harshits@iik.ac.in');
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Query Acknowledgement';
    //$mail->Body="abc";
     $mail->Body = 'Thank you for reaching out to us.<br>Your query ' . '<b><u>' . $message . '</b></u>' . ' has been acknowleged.We will respond to you within 48 hours.' . '<br><br>' . 'Regards,' . '<br>' . 'DHS Team.';
     $mail->AltBody = 'Thank you for reaching out to us.Your Query ' . $message . ' has been acknowleged.We will respond to you within 48 hours. Regards, DHS Team.';

     $mail->send();
    echo 'Email has been sent successfully.';
    // Process the data and send a response
    // echo "Hello, " . $name. htmlspecialchars($email). htmlspecialchars($phone). htmlspecialchars($message) . "! Welcome to our website.";
} else {
    // If the request method is not POST, send an error
    echo "Invalid request method.";
}
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// require 'vendor/autoload.php'; // Include Composer's autoload
$mail = new PHPMailer(true);

try {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the data sent via AJAX
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // $mail->isSMTP();                                      // Send using SMTP
    // $mail->Host       = 'smtp.gmail.com';               // Set SMTP server
    // $mail->SMTPAuth   = true;                             // Enable SMTP authentication
    // $mail->Username   = 'harshitsrivastava273@gmail.com';         // SMTP username
    // $mail->Password   = 'pckl ofsy vnhf luvw';            // SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // Enable SSL encryption
    // $mail->Port       = 587;                              // TCP port for SSL
    // $mail->SMTPDebug = 2;  // Set to 2 for detailed debugging output
    // $mail->Debugoutput = 'html';  // Output debug info in HTML format

    $mail->isSMTP();                                      // Send using SMTP
    $mail->Host       = 'mmtp.iitk.ac.in';               // Set SMTP server
    $mail->SMTPAuth   = true;                             // Enable SMTP authentication
    $mail->Username   = 'dhs@iitk.ac.in';         // SMTP username
    $mail->Password   = 'Har@aman1234';            // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // Enable SSL encryption
    $mail->Port       = 25;                              // TCP port for SSL
    $mail->SMTPDebug = 2;  // Set to 2 for detailed debugging output
    $mail->Debugoutput = 'html';  // Output debug info in HTML format

    // Recipients
    $mail->setFrom('dhs@iitk.ac.in', 'Digital Health Stack');
    $mail->addAddress('dhs@iitk.ac.in', 'Digital Health Stack'); // Add a recipient
    // $mail->addBCC('harshits@iik.ac.in');
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $phone;
    $mail->Body = 'Query is ' . '<b><u>' . $message . '</b></u>' . '. Received from ' .'<b><u>' .$name.'</b></u>'.'. Email id of the sender is ' .'<b><u>' .$email.'</b></u>';
    $mail->AltBody = 'Query is '  . $message .  ' .Received from ' .$name.' .Email id of the sender is ' .$email;

     $mail->send();
    echo 'Email has been sent successfully.';
    // Process the data and send a response
    // echo "Hello, " . $name. htmlspecialchars($email). htmlspecialchars($phone). htmlspecialchars($message) . "! Welcome to our website.";
} else {
    // If the request method is not POST, send an error
    echo "Invalid request method.";
}
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// $mail = new PHPMailer(true); // Create a new PHPMailer instance

// try {
//     // Server settings
//     $mail->isSMTP();                                      // Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';               // Set SMTP server
//     $mail->SMTPAuth   = true;                             // Enable SMTP authentication
//     $mail->Username   = 'harshitsrivastava273@gmail.com';         // SMTP username
//     $mail->Password   = 'pckl ofsy vnhf luvw';            // SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // Enable SSL encryption
//     $mail->Port       = 587;                              // TCP port for SSL
//     $mail->SMTPDebug = 2;  // Set to 2 for detailed debugging output
// $mail->Debugoutput = 'html';  // Output debug info in HTML format

//     // Recipients
//     $mail->setFrom('harshitsrivastava273@gmail.com', 'harshit');
//     $mail->addAddress('sunny.srivastava464@gmail.com', 'sunny'); // Add a recipient

//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Test Email using PHPMailer1';
//     $mail->Body    = '<b>This is a test email</b> sent using PHPMailer1.';
//     $mail->AltBody = 'This is a test email sent using PHPMailer1.';

//      $mail->send();
//     echo 'Email has been sent successfully.';
// } catch (Exception $e) {
//     echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
?>
