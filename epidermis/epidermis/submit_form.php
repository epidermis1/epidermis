<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// // Load Composer's autoloader if you installed PHPMailer via Composer
// require 'vendor/autoload.php';

// // Include the PHPMailer files manually if not using Composer
// // require 'path_to/PHPMailer/src/Exception.php';
// // require 'path_to/PHPMailer/src/PHPMailer.php';
// // require 'path_to/PHPMailer/src/SMTP.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Get the form details
//     $name = htmlspecialchars($_POST['firstname']);
//     $email = htmlspecialchars($_POST['email_address']);
//     $message = htmlspecialchars($_POST['phone_number']);

//     // Create a new PHPMailer instance
//     $mail = new PHPMailer(true);

    // try {
    //     // Server settings
    //     $mail->isSMTP();                                      // Set mailer to use SMTP
    //     $mail->Host       = 'smtp.gmail.com';                 // Specify main and backup SMTP servers
    //     $mail->SMTPAuth   = true;                             // Enable SMTP authentication
    //     $mail->Username   = 'ibrahimwarris1@gmail.com';           // SMTP username
    //     $mail->Password   = 'warris12345.';            // SMTP password (use an app password if 2FA is enabled)
    //     $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    //     $mail->Port       = 587;                              // TCP port to connect to

    //     // Recipients
    //     $mail->setFrom('your_email@gmail.com', 'Your Name');
    //     $mail->addAddress($email, $name);                     // Add recipient

    //     // Content
    //     $mail->isHTML(true);                                  // Set email format to HTML
    //     $mail->Subject = "Thank you for your submission, $name!";
    //     $mail->Body    = "Hi $name,<br><br>Thank you for your message:<br><b>$message</b><br><br>We will get back to you shortly.";
    //     $mail->AltBody = "Hi $name,\n\nThank you for your message:\n$message\n\nWe will get back to you shortly.";

    //     // Send the email
    //     $mail->send();
    //     echo 'Email has been sent';
    // } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }

    // try {
    //     //Server settings
    //     $mail->SMTPDebug = 2; // Enable verbose debug output
    //     $mail->isSMTP();      // Set mailer to use SMTP
    //     $mail->Host       = 'smtp.gmail.com'; // Specify SMTP server
    //     $mail->SMTPAuth   = true;             // Enable SMTP authentication
    //     $mail->Username   = 'ibrahimwarris1@gmail.com';  // SMTP username
    //     $mail->Password   = 'warris12345.';     // SMTP password (use app-specific password for Gmail 2FA)
    //     $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted
    //     $mail->Port       = 587;              // TCP port to connect to (TLS 587 or SSL 465)
    
    //     //Recipients
    //     $mail->setFrom('ibrahimwarris1@gmail.com', 'Mailer');
    //     $mail->addAddress('ibrahimwarris01@gmail.com', 'Joe User'); // Add a recipient
    
    //     // Content
    //     $mail->isHTML(true); // Set email format to HTML
    //     $mail->Subject = 'Here is the subject';
    //     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    //     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    //     $mail->send();
    //     echo 'Message has been sent';
    // } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }
    
//}
?>


<?php
// // Database connection settings
// $servername = "localhost";  // Database server (usually localhost)
// $username = "root";         // Your MySQL username (default is "root")
// $password = "";             // Your MySQL password (default is empty)
// $dbname = "epidermis";    // Your database name

// // Create connection to the database
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Check if form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve form data
//     $firstname = htmlspecialchars($_POST['firstname']);
//     $lastname = htmlspecialchars($_POST['lastname']);
//     $emailaddress = htmlspecialchars($_POST['email_address']);
//     $whatsappnumber = htmlspecialchars($_POST['phone_number']);
//     $emailaddress = htmlspecialchars($_POST['email_address']);
//     $emailaddress = htmlspecialchars($_POST['email_address']);

//     // Prepare and bind SQL statement to avoid SQL injection
//     $stmt = $conn->prepare("INSERT INTO users (name, email, message) VALUES (?, ?, ?)");
//     $stmt->bind_param("sss", $name, $email, $message); // "sss" means three strings are being bound

//     // Execute the statement
//     if ($stmt->execute()) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $stmt->error;
//     }

//     // Close the statement and connection
//     $stmt->close();
//     $conn->close();
// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPIDERMIS - Success consultation</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/img/logo1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="logoheadrbg">
        <div class="logoheadr">
            <a href=""><img src="assets/img/logo.png" alt="EPIDERMIS"></a>
        </div>
    </header>
    <div class="bookconsultsize bookconsultsizess">
        <div class="bookinsuccescheck">
            <i class="fa fa-check"></i>
        </div>
        <h1>Consultation booked successfully</h1>
        <p>A payment link has been sent to your Email. Check your WhatsApp to complete your consultation booking!</p>
        <div class="bookaconsultantgobackhome">
           <a href="index.html">Back to homepage</a>
        </div>
    </div>
</body>
</html>
