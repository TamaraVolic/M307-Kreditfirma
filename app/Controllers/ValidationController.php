<?php

class ValidationController
{
    const email_regex = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/";
    const simpletext_regex = "/^[\wöäüÖÄÜ ]+$/";
    const phone_regex = "/^[+0][\d ]+$/";

    public function index()
    {
        $result = [];
        if ($_GET['q'] === 'edit') {
            $result = $this->validateEdit($_POST);
        } elseif ($_GET['q'] === 'create') {
            $result = $this->validateCreate($_POST);
        }

        if (count($result) > 0) {
            http_response_code(422);
            echo json_encode($result);
        } else {
            echo json_encode('ok');
        }
    }


    public static function validateEdit(array $data): array
    {
        $errors = [];

        ValidationController::validateNames($data, $errors);
        ValidationController::validateEmail($data, $errors);
        ValidationController::validatePhoneNumber($data, $errors);
        ValidationController::validateCreditpackage($data, $errors);

        return $errors;
    }

    public static function validateCreate(array $data): array
    {
        $errors = [];

        ValidationController::validateNames($data, $errors);
        ValidationController::validateEmail($data, $errors);
        ValidationController::validatePhoneNumber($data, $errors);
        ValidationController::validateInstallments($data, $errors);
        ValidationController::validateCreditpackage($data, $errors);

        return $errors;
    }

    private static function validateCreditpackage($data, &$errors)
    {
        if (!(isset($data['creditpackage']) && is_numeric($data['creditpackage']) && $data['creditpackage'] >= 0 && $data['creditpackage'] < 46)) {
            $errors['creditpackage'] = "No such credit package";
        }
    }

    private static function validateInstallments($data, &$errors)
    {
        if (!(isset($data['installments']) && is_numeric($data['installments']) && $data['installments'] > 0 && $data['installments'] < 11)) {
            $errors['installments'] = "Minimum number of installments is 1, maximum is 10";
        }
    }

    private static function validatePhoneNumber($data, &$errors)
    {
        if (isset($data['phone_number']) && !($data['phone_number'] === '') && !(preg_match(ValidationController::phone_regex, $data['phone_number']))) {
            $errors['phone_number'] = "Phone number can't be empty and can only contain numbers, whitespace and a +";
        }
    }

    private static function validateEmail($data, &$errors)
    {
        if (!(isset($data['email']) && preg_match(ValidationController::email_regex, $data['email']))) {
            $errors['email'] = "Email can't be empty and must contain an @ and a domain name";
        }
    }

    private static function validateNames($data, &$errors)
    {
        if (!(isset($data['first_name']) && preg_match(ValidationController::simpletext_regex, $data['first_name']))) {
            $errors['first_name'] = "Name can't be empty or contain any numbers or special characters";
        }
        if (!(isset($data['last_name']) && preg_match(ValidationController::simpletext_regex, $data['last_name']))) {
            $errors['last_name'] = "Name can't be empty or contain any numbers or special characters";
        }
    }
}