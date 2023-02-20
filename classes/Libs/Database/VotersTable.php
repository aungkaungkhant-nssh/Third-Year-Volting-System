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
                        name,year,categoryId,role_no,image
                        )VALUES(
                        :name,:year,:categoryId,:role_no,:image
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
        if($query) $stmt= $this->db->query("
            select voters.*,categories.name as categoryName,categories.id as categoryId from voters left join categories on voters.categoryId=categories.id where voters.id=$query
        ");
        
        else  $stmt=$this->db->query("select * from voters");
        
        return $stmt->fetchALL();
    }
    public function addVote($id,$voteCount){
        try{
            $statement = $this->db->prepare("update voters set vote_count=:vote_count where id=:id");
            $statement->execute([
             ":vote_count"=>$voteCount,
             ":id"=>$id
            ]);
            return true;
        }catch (PDOException $e) {
            return false;
        }
      
    }
    public function update($id,$name,$year,$role_no,$image,$categoryId)
    {
        if($image){
               $statement = $this->db->prepare("
                UPDATE voters SET name=:name,year=:year,categoryId=:categoryId,role_no=:role_no,image=:image WHERE id = :id"
            );
            $statement->execute([ ':name' => $name, ':id' => $id,':year'=>$year,':categoryId'=>$categoryId,':role_no'=>$role_no,':image'=>$image ]);
            return $statement->rowCount();
        }
        else{
            $statement = $this->db->prepare("
            UPDATE voters SET name=:name,year=:year,categoryId=:categoryId,role_no=:role_no WHERE id = :id"
            );
            $statement->execute([ ':name' => $name, ':id' => $id,':categoryId'=>$categoryId,':year'=>$year,':role_no'=>$role_no ]);
            return $statement->rowCount();
        }
    } 
    public function getBySearchCategory($categoryId){
       
        $stmt=$this->db->query("select * from voters where categoryId=$categoryId");
           
        return $stmt->fetchALL();
    }
    public function destroy($id){
        $statement = $this->db->prepare("
        DELETE FROM voters WHERE id = :id
        ");
        $statement->execute([ ':id' => $id ]);
        return $statement->rowCount();
    }

}