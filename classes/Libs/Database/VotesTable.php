<?php
namespace Libs\Database;
use PDOException;

class VotesTable
{
    private $db = null;
    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }
    public function insert($data)
    {
        try {
            $sql = "INSERT INTO votes(
                        categoryId,studentId
                        )VALUES(
                        :categoryId,:studentId
                        )
                    "; 
            $stmt = $this->db->prepare($sql);
            $stmt->execute($data);
            return $this->db->lastInsertId();  
        } catch (PDOException $e) {
            return $e->getMesage();
        }
    }
    public function isVoted($categoryId,$studentId){
        try{
            $stmt=$this->db->query("select * from votes where categoryId=$categoryId and studentId=$studentId");
            $data = $stmt->fetchALL();
            if(count($data)>0)return true;
            else return false;
        } catch (PDOException $e) {
            return $e->getMesage();
        }
      
    }

}