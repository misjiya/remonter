<?php
include_once($_SERVER['DOCUMENT_ROOT']."/remonter/hh/db.php");
class CitiesModel extends Db
{
    public $insert_id=null;
    public function insert($attribute)
    {
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO cities (name,state_id,top,locality,created_by ) VALUES (:name,:state_id,:top_city,:locality,:created_by)";
            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':name', $attribute['city']);
            $prep->bindParam(':state_id', $attribute['state']);
            $prep->bindParam(':locality', $attribute['locality']);
            $prep->bindParam(':top_city', $attribute['top']);
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
            $sql="UPDATE cities SET name=:name,state_id=:state_id,top=:top_city,locality=:locality WHERE id=:id";
            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':name', $attribute['city']);
            $prep->bindParam(':state_id', $attribute['state']);
            $prep->bindParam(':locality', $attribute['locality']);
            $prep->bindParam(':top_city', $attribute['top']);
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
            $sql="SELECT ct.id,ct.name,ct.top,ct.locality,s.name AS state ,c.name AS country FROM cities ct
                    LEFT JOIN states s ON s.id=ct.state_id
                    LEFT JOIN countries c ON c.id=s.country_id
                    WHERE ct.deleted=0 AND (ct.top LIKE :SEARCH OR ct.name LIKE :SEARCH OR s.name LIKE :SEARCH OR c.name LIKE :SEARCH ) ORDER BY ct.top DESC LIMIT $r,$l";
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
            $sql="SELECT count(ct.id) FROM cities ct
                    LEFT JOIN states s ON s.id=ct.state_id
                    LEFT JOIN countries c ON c.id=s.country_id
                    WHERE ct.deleted=0 AND (ct.top LIKE :SEARCH OR ct.name LIKE :SEARCH OR s.name LIKE :SEARCH OR c.name LIKE :SEARCH )";
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
            $sql="SELECT ct.id,ct.name,ct.top,ct.locality, ct.state_id,c.id AS country_id FROM cities ct
                    LEFT JOIN states s ON s.id=ct.state_id
                    LEFT JOIN countries c ON c.id=s.country_id
                    WHERE ct.deleted=0 AND ct.id=:ID";
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
    public function updateLocality($locality,$id)
    {
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="UPDATE cities SET locality=:locality WHERE id=:id";
            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':locality', $locality);
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
    public function updateTopCity($top,$id)
    {
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="UPDATE cities SET top=:top_city WHERE id=:id";
            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':top_city', $top);
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
}