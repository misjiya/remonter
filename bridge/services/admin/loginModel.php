<?php
include_once($_SERVER['DOCUMENT_ROOT']."/remonter/hh/db.php");
class LoginModel extends Db
{
    public $insert_id=null;
    public function validate($attribute)
    {
        $result=array();
        try 
        {
            $l=$this->limit;
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT id,username,account_type,access_type 
                    FROM users 
                    WHERE deleted=0 
                    AND username=:username
                    AND password=:password
                    AND account_type=:account_type
                    ";
            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':username', $attribute['username']);
            $prep->bindParam(':password', $attribute['password']);
            $prep->bindParam(':account_type', $attribute['account_type']);
            $prep->execute();
            $prep->setFetchMode(PDO::FETCH_ASSOC);
            $result=$prep->fetch();
            return $result;
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            return $result;
        }
    }
}