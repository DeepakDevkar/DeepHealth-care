<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/css/PHPMailer-master/src/Exception.php';
require 'C:/xampp/htdocs/css/PHPMailer-master/src/PHPMailer.php';
require 'C:/xampp/htdocs/css/PHPMailer-master/src/SMTP.php';

// Check if the form is submitted and the approve button is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['approve'])) {
    // Get the appointment ID, email, and phone number from the form
    
    $email = $_POST['email'];

    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'harshpatil6054@gmail.com'; // Your Gmail email address
        $mail->Password   = 'edkfxqjwspokoxlg'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('harshpatil6054@gmail.com', 'Doctor');
        $mail->addAddress($email); // Add recipient email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Appointment Approved';
        $mail->Body    = 'Your appointment has been approved.';

        $mail->send();
        echo "Email sent successfully.";
    } catch (Exception $e) {
        echo "Error sending email: {$mail->ErrorInfo}";
    }

    // You can add further logic here such as updating the database to mark the appointment as approved
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reject'])) {
     
    $email = $_POST['email'];

    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'harshpatil6054@gmail.com'; // Your Gmail email address
        $mail->Password   = 'edkfxqjwspokoxlg'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('harshpatil6054@gmail.com', 'Doctor');
        $mail->addAddress($email); // Add recipient email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Appointment Rejected';
        $mail->Body    = 'Your appointment has been Rejected.';

        $mail->send();
        echo "Email sent successfully.";
    } catch (Exception $e) {
        echo "Error sending email: {$mail->ErrorInfo}";
    }

} else {
    // Handle other cases if needed
}
?>