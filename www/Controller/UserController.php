<?php 
    class UserController{
        var $UserModel;
        public function __construct()
        {
            require_once("Models/UserModel.php");
            $this->UserModel = new $UserModel;
        }
        public function listProducts()
        {
            $result = $this->UserModel->listClients();
            $arrayClients =  array();
    
            while ($client = $result->fetch_assoc()) {
                array_push($arrayClients, $client);
            }
    
            header('Content-Type: application/json');
            echo json_encode($arrayClients);
        }
    }