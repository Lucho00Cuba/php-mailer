<?php

    # MAILER
    if($_POST['email'] != ''){
        // The email to validate
        $email = $_POST['email'];

        // An optional sender
        function domain_exists($email, $record = 'MX'){
            list($user, $domain) = explode('@', $email);
            return checkdnsrr($domain, $record);
        }
        if(domain_exists($email)) {
            #echo('This MX records exists; I will accept this email as valid.');

            $to_email = 'lomv12345@gmail.com';
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $headers = 'From: ' . $_POST['email'];

            if ( mail($to_email,$subject,$message,$headers) ) {
                # JSON
                #$myObj = array("status" => "200");
                #header("Content-Type: application/json");
                #$myJSON = json_encode($myObj);
                #echo $myJSON;
                #exit();
                header("Location: /", TRUE, 301);
            } else {
                header("Location: /", TRUE, 301);
                #$myObj = array("status" => "500");
                #header("Content-Type: application/json");
                #$myJSON = json_encode($myObj);
                #echo $myJSON;
                #exit();
            }
        }
        else {
            #echo('No MX record exists;  Invalid email.');
            header("Location: /", TRUE, 301);
        }
    }
    
?>