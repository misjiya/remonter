<?php
include_once($_SERVER['DOCUMENT_ROOT']."/remonter/hh/db.php");
class CommonHelper extends Db
{
    public function fetchAllCountries()
    {
        $result=array();
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT id,name FROM countries WHERE deleted=0 AND id=101";
            $prep = $this->conn()->prepare($sql);
            $prep->execute();
            $prep->setFetchMode(PDO::FETCH_ASSOC);
            $result=$prep->fetchAll();
            return $result;
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            return $result;
        }
    }
    public function fetchAllStates()
    {
        $result=array();
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT id,name FROM states WHERE deleted=0 AND country_id=101";
            $prep = $this->conn()->prepare($sql);
            $prep->execute();
            $prep->setFetchMode(PDO::FETCH_ASSOC);
            $result=$prep->fetchAll();
            return $result;
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            return $result;
        }
    }
}