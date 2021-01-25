<?php

    $secretKey  = "6LdYuzMaAAAAAFSu1XhroIdXqG_d0Yp2uPfS4-_d";
    $responseKey = $_POST['g-recaptcha-response'];
    $UserIP = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";
    $response = file_get_contents($url);
    $validacionResponse = json_decode($response);

    $inputs = [
        'packorder' => 'Pak ordered',
        'kindcostumer' => 'kind of costumer',
        'name' => 'Name',
        'lastname' => 'Lastname',
        'phone' => 'Phone',
        'email' => 'Email',
        'address1' => 'Address 1',
        'address2' => 'Address 2',
        'city' => 'City',
        'state' => 'State',
        'zip' => 'ZIP',
        'country' => 'Country',
        'cardholder' => 'Card holder',
        'cardnumber' => 'Card number',
        'cvv' => 'CVV',
        'expdate' => 'Expiration Date',
        'billingaddress' => 'Billing Address',
        'referrer' => 'Referred by',
        'earnmore' => 'Like to know about earning more',
        'becontacted' => 'How to bo contacted',
        'mensagem' => 'Question or suggestion',
    ];


    // if ($validacionResponse->success == true) {
        if ($_POST) {
            
            $header = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9';
            $info = [];
            $info['ip'] = $_SERVER['REMOTE_ADDR'];
            $info['timestamp'] = time();
            $info['filename'] = str_replace('=', '', base64_encode( $_POST['email']. '.'. $info['timestamp'] .'.'. $info['ip'] ));
            $info['filename']  = 'date'.date('Y-m-d_H-i-s', time()) . '_';
            $info['filename'] .= 'name'. str_replace(' ', '-',$_POST['name']).'-'.str_replace(' ', '-',$_POST['lastname']) . '_';
            $info['filename'] .= 'ip'.$info['ip'] ;
            $info['form'] = $_POST;
            
            $content = str_replace('=', '', base64_encode(json_encode($info))) ;
            $info['token'] = $header. '.' . $content;
            
            function createFile($json){
                
                unset($json['form']['cardholder']);
                unset($json['form']['cardnumber']);
                unset($json['form']['cvv']);
                unset($json['form']['expdate']);
                unset($json['form']['billingaddress']);

                $archivo = fopen( '../storage/order/'.$json['filename'].".json" , "w" );
                fwrite($archivo, json_encode($json) );
                fclose($archivo);
                return 'ok';
            }
            
            createFile($info);

            $data = (object) $_POST;

            try {

                $response =[];

                $email = [];
                $email['from'] = 'glownow@collagenelixir4u.com';
                // $email['password'] = 'kEQ7yBmxwCRJ';
                $email['to'][] = 'collagenelixir4u@gmail.com';
                $email['to'][] = 'pereirawe@gmail.com';

                $email['subject'] = 'CollagenElixir4U.com | Glow order from ' .$data->name;

                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $headers .= 'From: CollagenElixir4U.com <'.$email['from'].'>' . "\r\n";

                $email['headers'] = $headers;
                
                $email['message'] = '<div id="message">
                    <h2>'.$data->name.'</h2><hr>
                    <p><b>Email: </b>'.$data->email.'</p>
                    <p><b>Phone: </b>'.$data->phone.'</p><hr>';
                
                foreach ($data as $key => $value) {
                    $email['message'] .= '<p><b>' . $inputs[$key] . ':</b> '.$value .'</p>';
                }
                
                $email['message'] .= '<hr>
                <p><small>From: '.$UserIP.'</small></p>
                <a href="https://collagenelixir4u.com/storage/order/'.$info['filename'].'.json">File</a>
            </div>';

                // print_r($email); die;
                mail( $email['to'][0], $email['subject'], $email['message'], $email['headers']);
                mail( $email['to'][1], $email['subject'], $email['message'], $email['headers']);
                $response['order'] = 'ok';

            } catch (Exception $e) {
                $response = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            print_r($response);
            return $response;

        }
    // }

 

