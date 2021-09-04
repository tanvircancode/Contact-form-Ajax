<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = trim($_POST["name"]);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone_number = trim($_POST["phone_number"]);
    $msg_subject = trim($_POST["msg_subject"]);
    $message = trim($_POST["message"]);

    if(empty($name) || !filter_var($email,FILTER_VALIDATE_EMAIL) || empty($phone_number) || empty($msg_subject) || empty($message) ){
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }

    $recipient = "tanvirxahm@gmail.com";
    $subject = "New Message from $name";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Subject: $subject\n\n";
    $email_content .= "Message:\n$message\n";

    $email_headers = "From: $name <$email>";

    if(mail($recipient,$subject,$email_content,$email_headers)){
        http_response_code(200);
            echo "Thank You! Your message has been sent.";
    }
    else{
        http_response_code(500);
echo "Oops! Something went wrong and we couldn't send your message.";

    }
}else{
    http_response_code(403);
echo "There was a problem with your submission, please try again.";

}
?>