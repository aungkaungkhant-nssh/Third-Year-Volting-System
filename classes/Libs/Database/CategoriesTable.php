<?php
namespace Libs\Database;
use PDOException;

class CategoriesTable
{
    private $db = null;
    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }
    public function insert($data)
    {
        try {
            $sql = "INSERT INTO categories(
                        name
                        )VALUES(
                        :name
                        )
                    "; 
            $stmt = $this->db->prepare($sql);
            $stmt->execute($data);
            return $this->db->lastInsertId();  
        } catch (PDOException $e) {
            return $e->getMesage();
        }
    }
    public function destroy($id){
        $statement = $this->db->prepare("
        DELETE FROM categories WHERE id = :id
        ");
        $statement->execute([ ':id' => $id ]);
        return $statement->rowCount();
    }
    public function update($id, $name)
        {
            $statement = $this->db->prepare("
            UPDATE categories SET name=:name WHERE id = :id"
            );
            $statement->execute([ ':name' => $name, ':id' => $id ]);
            return $statement->rowCount();
        }
    public function getAll($query="")
    {   
        $stmt="";
        if($query)$stmt=$this->db->query("SELECT * from categories where id=$query");
        else $stmt=$this->db->query("SELECT * from categories");
      
      
        return $stmt->fetchALL();
    }

}