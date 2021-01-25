<?php

    $secretKey  = "6LdYuzMaAAAAAFSu1XhroIdXqG_d0Yp2uPfS4-_d";
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
                $email['from'] = 'glownow@collagenelixir4u.com';
                // $email['password'] = 'kEQ7yBmxwCRJ';
                $email['to'][] = 'collagenelixir4u@gmail.com';
                $email['to'][] = 'pereirawe@gmail.com';

                $email['subject'] = 'CollagenElixir4U.com | Message from ' .$data->name;

                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $headers .= 'From: CollagenElixir4U.com <'.$email['from'].'>' . "\r\n";

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
                mail( $email['to'][1], $email['subject'], $email['message'], $email['headers']);

                $response['mail'] = 'ok';
            } catch (Exception $e) {
                $response = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            print_r($response);
            return $response;
        }
    }