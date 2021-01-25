<?php
require_once 'DeployModel.php';

class DeployController extends DeployModel {
    
    public function getBranches(){
        $return = $this->getBranchesModel();
        $return = json_encode($return);
        return $return;
    }

    public function setBranch($branch = "master"){
        $branches = json_decode($this->getBranches());
        if (!$this->checkBranchModel($branch, $branches)) {
            return "Error";
        } 
        $output = $this->setBranchModel($branch);
        $output['branches'] = $branches; 
        $output = json_encode($output);
        return $output;
    }

    public function getStatus(){
        $output = $this->getStatusModel();
        $output = json_encode($output);
        // header('Content-Type: application/json');

        return $output;
    }

    public function runDeploy($branch = "master"){
        $branches = json_decode($this->getBranches());
        if ($this->checkBranchModel($branch, $branches)) {
            $this->setBranch($branch);
        } else {
            return "Error";
        }
        $output = $this->runDeployModel($branch);
        $output = json_encode($output);
        return $output;
    }

    public function runDeployForce($branch = "master"){
        $branches = json_decode($this->getBranches());
        if ($this->checkBranchModel($branch, $branches)) {
            $this->setBranch($branch);
        } else {
            return "Error";
        }
        $output = $this->runDeployForceModel($branch);
        $output = json_encode($output);
        return $output;
    }

    public function decodeGitMessage($message){
        
        // foreach ($status as $key => $value) {
        //     print_r($value);
        // }
        
        // $output = json_encode($output);
        // return $output;
    }
    
}