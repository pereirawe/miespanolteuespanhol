<?php
require_once 'LogModel.php';

class LogController extends LogModel {
    
    public $ip;
    public $date;

    public function __construct()
    {   
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $this->ip = $ip;
        $this->date = date('Y-m-d H:i:s');

    }

    public function saveLog($arrLog){
        try {
            $this->saveLogModel($arrLog);
        } catch (\Throwable $th) {
            echo "Error";
        }
    }


}

$log = new LogController;

$arrLog = [
    "userId" => 0001,
    "command"=> 'Command Test',
    "result"=> 'Result Test',
    "param"=> 'Param Test'
];

$log->saveLog($arrLog);


