<?php

class CreditModel 
{
    public function load(string $table, int $id)
    {
        $statement = db()->prepare('SELECT * FROM ' . $table . ' WHERE credit_id = :id LIMIT 1');
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch();
    }
    public static function getAllCredits(): array
    {
        $pdo = db();
        $statement = $pdo->prepare("SELECT credit_id, first_name, last_name, email, phone_number, installments, cp.name as 'credit_package', (DATE_ADD(start_date, INTERVAL (installments*15) DAY)) AS payback_date, (DATEDIFF(NOW(), (DATE_ADD(start_date, INTERVAL (installments*15) DAY)))>0) AS due FROM credit as c
        LEFT JOIN creditpackage AS cp 
        ON c.fk_creditpackage_id = cp.creditpackage_id 
        WHERE credit_status = 0;");
        $statement->execute();
        return $statement->fetchAll();
    }
    public static function createCredit($data): array
    {
        $pdo = db();
        $statement = $pdo->prepare("INSERT INTO credit (first_name, last_name, email, phone_number, installments, fk_creditpackage_id) VALUES (:first_name, :last_name, :email, :phone_number, :installments, :creditpackage_id);");
        $statement->bindParam(':first_name', $data['name']);
        $statement->bindParam(':last_name', $data['lastname']);
        $statement->bindParam(':email', $data['email']);
        $statement->bindParam(':phone_number', $data['phone_number']);
        $statement->bindParam(':installments', $data['installments']);
        $statement->bindParam(':creditpackage_id', $data['creditpackage']);
        $statement->execute();
        return $statement->fetchAll();
    }
    public static function updateCredit($id, $data): array
    {
        $pdo = db();
        $statement = $pdo->prepare("UPDATE credit SET
	    first_name = :name,
	    last_name = :lastname,
        email = :email,
        phone_number = :phone_number,
        fk_creditpackage_id = :creditpackage_id,
        credit_status = :paid_back
        WHERE credit_id = :id;");
        $statement->bindParam(':credit_id', $id);
        $statement->bindParam(':first_name', $data['name']);
        $statement->bindParam(':last_name', $data['lastname']);
        $statement->bindParam(':email', $data['email']);
        $statement->bindParam(':phone_number', $data['phone_number']);
        $statement->bindParam(':creditpackage_id', $data['creditpackage']);
        $paid_back = isset($data['cretid_status']) ? 1 : 0;
        $statement->bindParam(':credit_status', $paid_back);
        $statement->execute();
        return $statement->fetchAll();
    }
}
?>