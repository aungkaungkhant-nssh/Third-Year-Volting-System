<?php
namespace Libs\Database;
use PDOException;

class StudentsTable
{
    private $db = null;
    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }
    public function insert($data)
    {
        try {
            $sql = "INSERT INTO students(
                        name,phone,password,role_id,
                        created_at
                        )VALUES(
                        :name,:phone,:password,:role_id,
                        NOW()
                        )
                    "; 
            $stmt = $this->db->prepare($sql);
            $stmt->execute($data);
            return $this->db->lastInsertId();  
        } catch (PDOException $e) {
            return $e->getMesage();
        }
    }
    public function getAll()
        {
            $stmt = $this->db->query("
                SELECT students.*,roles.name AS role,roles.value
                FROM students LEFT JOIN roles
                ON students.role_id = roles.id
            ");
            return $stmt->fetchALL();
        }
    public function findByPhoneAndPassword($phone, $password)
    {
        $statement = $this->db->prepare("
        SELECT students.*, roles.name AS role, roles.value
        FROM students LEFT JOIN roles
        ON students.role_id = roles.id
        WHERE students.phone = :phone 
        AND students.password = :password
        ");
        $statement->execute([
        ':phone' => $phone,
        ':password' => $password 
        ]);
        $row = $statement->fetch();
        return $row ?? false;
}

}