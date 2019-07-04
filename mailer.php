<?php

    $public_key = "";
    $private_key = "";
    $url = "https://www.google.com/recaptcha/api/siteverify";

    if(array_key_exists("submit", $_POST)) {
        //echo "<pre>";print_r($_POST);echo "</pre>";
        $response_key = $_POST['g-recaptcha-response'];
        $response = file_get_contents($url.'?secret='.$private_key.'&response='.$response_key.'&remoteip='.$_SERVER['REMOTE_ADDR']);
        $response = json_decode($response);
        
        //echo "<pre>";print_r($response);echo "</pre>";

        if($response->success == 1)
        {
            echo "Your information was valid...";

            $mail_to = "";
            
            # Sender Data
            $subject = trim($_POST["subject"]);
            $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
            //$phone = trim($_POST["phone"]);
            $inquiry = trim($_POST["inquiry"]);
            $message = trim($_POST["message"]);
            
            if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($inquiry) OR empty($subject) OR empty($message)) {
                # Set a 400 (bad request) response code and exit.
                http_response_code(400);
                echo "Please complete the form and try again.";
                exit;
            }
            
            # Mail Content
            $content = "Name: $name\n";
            $content .= "Email: $email\n\n";
            // $content .= "Phone: $phone\n";
            $content .= "Business Inquiry: $inquiry\n";
            $content .= "Message:\n$message\n";

            # email headers.
            $headers = "From: $name &lt;$email&gt;";

            # Send the email.
            $success = mail($mail_to, $subject, $content, $headers);
            if ($success) {
                # Set a 200 (okay) response code.
                http_response_code(200);
                echo "Thank You! Your message has been sent. <a href='.'>back</a>";
            } else {
                # Set a 500 (internal server error) response code.
                http_response_code(500);
                echo "Oops! Something went wrong, we couldn't send your message.  <a href='.'>back</a>";
            } 
            // } else {
            //     # Not a POST request, set a 403 (forbidden) response code.
            //     http_response_code(403);
            //     echo "There was a problem with your submission, please try again. <a href='.'>back</a>";
            // }            
        }
        else 
        {
            echo "You are a robot and we don't like you...";
        }

    }


?>

