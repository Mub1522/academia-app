<?php

class Student
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function create($name, $email, $date_of_birth)
    {
        $stmt = $this->pdo->prepare("INSERT INTO students (name, email, date_of_birth) VALUES (:name, :email, :date_of_birth)");
        return $stmt->execute([
            'name' => $name,
            'email' => $email,
            'date_of_birth' => $date_of_birth,
        ]);
    }
}
