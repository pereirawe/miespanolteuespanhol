<?php
    
class LogModel {

    public function saveLogModel($arrLog){
        $log = [];
        
        $log['ip'] = $this->ip;
        $log['date'] = $this->date;
        $log['userId'] = $arrLog['userId'];
        $log['action'] = $arrLog['action'];
        $log['result'] = $arrLog['result'];
        $log['param'] = $arrLog['param'];

        $impArray = file_get_contents('log.json');
        if ($impArray == "null") { $impArray = "[]"; }
        $tempArray = json_decode($impArray);
        array_push($tempArray, $log);
        $jsonData = json_encode($tempArray, JSON_PRETTY_PRINT);
        file_put_contents('log.json', $jsonData, LOCK_EX);
        
        return true;
    }

}