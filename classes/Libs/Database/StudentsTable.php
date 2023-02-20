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
    public function getAll($query="")
        {
            // $stmt = $this->db->query("
            //     SELECT students.*,roles.name AS role,roles.value
            //     FROM students LEFT JOIN roles
            //     ON students.role_id = roles.id
            // ");
            $stmt;
            if($query) $stmt= $this->db->query("select * from students where id=$query");
            else  $stmt=$this->db->query("select * from students");
            return $stmt->fetchALL();
        }
    public function findByPhoneAndPassword($phone, $password,$role_id=1)
    {
        $statement = $this->db->prepare("
        SELECT students.*, roles.name AS role
        FROM students LEFT JOIN roles
        ON students.role_id = roles.id
        WHERE students.phone = :phone 
        AND students.password = :password
        AND students.role_id = :role_id
        ");
        $statement->execute([
        ':phone' => $phone,
        ':password' => $password,
        ":role_id"=>$role_id
        ]);
        $row = $statement->fetch();
        return $row ?? false;
    }
    public function update($id, $name,$phone)
    {
        $statement = $this->db->prepare("
        UPDATE students SET name=:name,phone=:phone WHERE id = :id"
        );
        $statement->execute([ ':name' => $name, ':id' => $id,':phone'=>$phone ]);
        return $statement->rowCount();
    }
    
    public function destroy($id){
        $statement = $this->db->prepare("
        DELETE FROM students WHERE id = :id
        ");
        $statement->execute([ ':id' => $id ]);
        return $statement->rowCount();
    }
    
}

