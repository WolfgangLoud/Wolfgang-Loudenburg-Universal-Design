if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    $to = 'bigbadwolf@gmail.com'; // Replace with your email address
    $emailSubject = 'New Submission from Web Form';
    $body = "First Name: $firstName\nLast Name: $lastName\nCountry: $country\nMessage: $subject";

    $headers = "From: webmaster@example.com\r\n"; // Replace with a valid sender email address
    $headers .= "Reply-To: webmaster@example.com\r\n"; // Replace with a valid reply-to email address
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $emailSubject, $body, $headers)) {
        echo "Thank you for submitting the form. We will contact you shortly!";
    } else {
        echo "There was a problem sending your message. Please try again.";
    }
}