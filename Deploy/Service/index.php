<?php
    require_once 'Deploy/DeployController.php';
    
    $deploy = new DeployController;
    header('Content-Type: application/json');

    if (isset($_GET['action'])){
        switch ($_GET['action']) {
            case 'deploy':
                $output = $deploy->runDeploy();
                break;
            
            case 'deployForce':
                $output = $deploy->runDeployForce();
                break;
            
            default:
                $output = [];
                $output['status'] = json_decode($deploy->getStatus())->message;
                $output = json_encode($output);
                break;
        }
    }
    
    print_r($output);