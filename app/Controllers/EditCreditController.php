<?php
require 'app/Controllers/ValidationController.php';
require 'app/Models/CreditPackageModel.php';
require 'app/Models/CreditModel.php';

class EditCreditController
{

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->edit($_POST);
        } else {
            if (isset($_GET['id'])) {
                $creditPackageModel = new CreditpackageModel();
                $creditModel = new CreditModel();
                $creditPackageData = $creditPackageModel->getAll("creditpackage");
                $result = $creditModel->load("credit", $_GET['id']);
                require 'app/Views/editcredit.view.php';
            } else {
                http_response_code(422);
                echo 'Id parameter is required';
            }
        }
    }


    public function edit($data)
    {
        $validation_result = ValidationController::validateEdit($data);
        if (count($validation_result) > 0) {
            http_response_code(422);
            echo json_encode($validation_result);
        } else {
            $result = CreditModel::updateCredit($_GET['id'], $data);
        }
    }
}