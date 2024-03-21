<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <?php 
        $errors = [];
        $errorMessage = '';
        
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
            
            if (empty($name)) {
                $errors[] = 'Name is empty';
            }
            
            if (empty($email)) {
                $errors[] = 'Email is empty';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Email is invalid';
            }

            if (empty($phone)) {
                $errors[] = 'Phone number is empty';
            }

            if (empty($message)) {
                $errors[] = 'Message is empty';
            }
            
            if (empty($errors)) {
                $toEmail = $email;
                $emailSubject = 'New email from your contact form';
                $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
                $bodyParagraphs = [
                    "Name: {$name}",'<br>',
                    "Email: {$email}",'<br>',
                    "Phone Number: {$phone}",'<br>',
                    "Message: {$message}"
                ];
                $body = join(PHP_EOL, $bodyParagraphs);
            
                if (mail($toEmail, $emailSubject, $body, $headers)) {
                    header( "Location: thank-you.html");
                } else {
                    $errorMessage = 'Oops, something went wrong. Please try again later';
                }
            
            } else {
            
                $allErrors = join('<br/>', $errors);
                $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
            }
        }
    ?>
</body>
</html>