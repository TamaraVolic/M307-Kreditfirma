<?php
require 'app/Models/CreditModel.php';

class CreditListController
{
    public function index()
    {
        $result = CreditModel::getAllCredits();

        require 'app/Views/creditlist.view.php';
    }
}