<?php
namespace Libs\Database;
use PDOException;

class VotersTable
{
    private $db = null;
    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }
    public function insert($data)
    {
        try {
            $sql = "INSERT INTO voters(
                        name,year,role_no,image
                        )VALUES(
                        :name,:year,:role_no,:image
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
            if($query) $stmt= $this->db->query("select * from voters where id=$query");
            else  $stmt=$this->db->query("select * from voters");
            return $stmt->fetchALL();
        }
    // public function findByPhoneAndPassword($phone, $password)
    // {
    //     $statement = $this->db->prepare("
    //     SELECT students.*, roles.name AS role, roles.value
    //     FROM students LEFT JOIN roles
    //     ON students.role_id = roles.id
    //     WHERE students.phone = :phone 
    //     AND students.password = :password
    //     ");
    //     $statement->execute([
    //     ':phone' => $phone,
    //     ':password' => $password 
    //     ]);
    //     $row = $statement->fetch();
    //     return $row ?? false;
    // }
    public function update($id,$name,$year,$role_no,$image)
    {
        if($image){
               $statement = $this->db->prepare("
                UPDATE voters SET name=:name,year=:year,role_no=:role_no,image=:image WHERE id = :id"
            );
            $statement->execute([ ':name' => $name, ':id' => $id,':year'=>$year,':role_no'=>$role_no,':image'=>$image ]);
            return $statement->rowCount();
        }
        else{
            $statement = $this->db->prepare("
            UPDATE voters SET name=:name,year=:year,role_no=:role_no WHERE id = :id"
            );
            $statement->execute([ ':name' => $name, ':id' => $id,':year'=>$year,':role_no'=>$role_no ]);
            return $statement->rowCount();
        }
    } 
      
    public function destroy($id){
        $statement = $this->db->prepare("
        DELETE FROM voters WHERE id = :id
        ");
        $statement->execute([ ':id' => $id ]);
        return $statement->rowCount();
    }

}