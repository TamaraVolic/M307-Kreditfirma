<?php
require 'app/Models/CreditPackageModel.php';
require 'app/Models/CreditModel.php';
require 'app/Controllers/ValidationController.php';

class CreateCreditController
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->createCredit($_POST);
        } else {
            $CreditPackageModel = new CreditPackageModel();
            $creditPackageData = $CreditPackageModel->getAll("creditpackage");
            require 'app/Views/createcredit.view.php';
        }
    }


    public function createCredit($data)
    {
        $validation_result = ValidationController::validateCreate($data);
        if (count($validation_result) > 0) {
            http_response_code(422);
            echo json_encode($validation_result);
        } else {
            $result = CreditModel::createCredit($data);
        }
    }
}