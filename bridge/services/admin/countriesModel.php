<?php
include_once($_SERVER['DOCUMENT_ROOT']."/hheart/hh/db.php");
class CountriesModel extends Db
{
    public $insert_id=null;
    public function insert($attribute)
    {
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO countries (name,created_by) VALUES (:name,:created_by)";
            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':name', $attribute['countryname']);
            $prep->bindParam(':created_by', $this->created_by);
            $prep->execute();
            $this->insert_id=$this->conn()->lastInsertId();
            return true;
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            return false;
        }
    }
    public function update($attribute,$id)
    {
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="UPDATE countries SET name=:name WHERE id=:id";
            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':name', $attribute['countryname']);
            $prep->bindParam(':id', $id);
            $prep->execute();
            return true;
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            return false;
        }
    }
    public function fetch($r=0,$SEARCH_TEXT='')
    {
        $result=array();
        try 
        {
            $l=$this->limit;
            $SEARCH_TEXT=$SEARCH_TEXT."%";
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT id,name FROM countries WHERE deleted=0 AND name LIKE :SEARCH LIMIT $r,$l";
            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':SEARCH',$SEARCH_TEXT);
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
    public function fetchCount($SEARCH_TEXT='')
    {
        $result=array();
        try 
        {
            $SEARCH_TEXT=$SEARCH_TEXT."%";            
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT count(id) FROM countries WHERE deleted=0 AND name LIKE :SEARCH";
            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':SEARCH',$SEARCH_TEXT);
            $prep->execute();
            $prep->setFetchMode(PDO::FETCH_ASSOC);
            $result=$prep->fetchColumn();
            return $result;
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            return $result;
        }
    }
    public function fetchOnId($ID)
    {
        $result=array();
        try 
        {
            $l=$this->limit;
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT id,name FROM countries WHERE deleted=0 AND id=:ID";
            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':ID', $ID);
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