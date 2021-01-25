<?php

    $secretKey  = "6LegLjwaAAAAAHEdjYI_p6cVxQBphaNsttjBJPIq";
    $responseKey = $_POST['g-recaptcha-response'];
    $UserIP = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";
    $response = file_get_contents($url);
    
    $validacionResponse = json_decode($response);
    
    if ($validacionResponse->success == true) {
        if ($_POST) {
            
            $data = (object) $_POST;

            try {

                $response =[];

                $email = [];
                $email['from'] = 'pereirawe@gmail.com';
                $email['to'][] = 'pereirawe@gmail.com';

                $email['subject'] = 'Miespanolteuespanhol.com | Message from ' .$data->name;

                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $headers .= 'From: Miespanolteuespanhol.com <'.$email['from'].'>' . "\r\n";

                $email['headers'] = $headers;
                
                $email['message'] = '<div id="message">
                    <h2>'.$data->name.'</h2><hr>
                    <p><b>Email: </b>'.$data->email.'</p>
                    <p><b>Phone: </b>'.$data->phone.'</p><hr>
                    <h2>Message:</h2>
                    <p>'.$data->message.'</p>
                    <hr>
                    <p><small>From: '.$UserIP.'</small></p>
                </div>';

                // print_r($email); die;

                mail( $email['to'][0], $email['subject'], $email['message'], $email['headers']);

                $response['mail'] = 'ok';
            } catch (Exception $e) {
                $response = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            print_r($response);
            return $response;
        }
    }