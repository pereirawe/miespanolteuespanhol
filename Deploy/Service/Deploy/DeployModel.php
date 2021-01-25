<?php
    
class DeployModel {
    public function checkBranchModel($branch, $branches){
        $blBranch = false;
        foreach ($branches as $key => $value) {
            if ( $branch == $value[0]) {
                $blBranch = true;
            }
        }
        return $blBranch;
    }

    public function checkActiveBranch($branches){
        $return = [];
        foreach ($branches as $branch) {
            if ( strpos($branch, " ") ) {
                $branch = array( $branch, 1 );
            } else {
                $branch = array( $branch, 0 );
            }
            $branch = str_replace(" ", "", $branch);
            $branch = str_replace("*", "", $branch);
            array_push($return, $branch);
        }
        return $return;
    }

    public function getBranchesModel(){
        try {
            $output = shell_exec('git branch');
            if ($output == "") {
                throw new Exception("Error Processing Request", 1);
            }
        } catch (\Exception $e) {
            $output = $e;
            throw new Exception("Error Processing Request" . $e->getMessage(), 1);
        }
        $output = explode("\n", $output);
        $output = array_filter($output);
        $return = $this->checkActiveBranch($output);
        return $return;
    }

    public function setBranchModel($branch){
        $command = 'git checkout ' . $branch;
        try {
            shell_exec($command);
            $result = true;
        } catch (\Exception $e) {
            throw new Exception("Error Processing Request" . $e->getMessage(), 1);
            $output = $e;
            $result = false;
        }
        
        $response = [
            'command' => $command,
            'branch' => $branch,
            'result' => $result,
            'message' => $output
        ];
        return $response;
    }

    public function getStatusModel(){
        $command = 'git status -uno';

        try {
            $output = shell_exec($command);
            $result = true;
        } catch (\Exception $e) {
            $output = $e;
            $result = false;
        }

        $response = [
            'command' => $command,
            'result' => $result,
            'message' => $output
        ];
        return $response;

    }

    public function runDeployModel($branch){
        $command = 'git pull';
        try {
            $output = shell_exec($command);
            $result = true;
        } catch (\Exception $e) {
            $output = $e;
            $result = false;
        }

        $response = [
            'command' => $command,
            'branch' => $branch,
            'result' => $result,
            'message' => $output
        ];
        return $response;
    }

    public function runDeployForceModel($branch){
        $command = 'git reset --hard HEAD; git pull';
        try {
            $output = shell_exec($command);
            $result = true;
        } catch (\Exception $e) {
            $output = $e;
            $result = false;
        }

        $response = [
            'command' => $command,
            'branch' => $branch,
            'result' => $result,
            'message' => $output
        ];
        return $response;
    }
}