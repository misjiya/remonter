<?php
include_once($_SERVER['DOCUMENT_ROOT']."/hheart/hh/db.php");
class CategoriesModel extends Db
{
    public $insert_id=null;
    public function insert($attribute)
    {

        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO categories (name,slug,profile_type,no_of_profile,girl_no_of_profile,guy_no_of_profile,created_by) VALUES (:name,:slug,:profile_type,:no_of_profile,:girl_no_of_profile,:guy_no_of_profile,:created_by)";

            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':name', $attribute['categoryname']);
            $prep->bindParam(':slug', $attribute['slug']);
            $prep->bindParam(':profile_type', $attribute['profiletype']);
            $prep->bindParam(':no_of_profile', $attribute['profileno']);
            $prep->bindParam(':girl_no_of_profile', $attribute['girlprofileno']);
            $prep->bindParam(':guy_no_of_profile', $attribute['guyprofileno']);
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
            $sql="UPDATE categories SET name=:name,slug=:slug,profile_type=:profile_type,no_of_profile=:no_of_profile,girl_no_of_profile=:girl_no_of_profile,guy_no_of_profile=:guy_no_of_profile WHERE id=:id";

            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':name', $attribute['categoryname']);
            $prep->bindParam(':slug', $attribute['slug']);
            $prep->bindParam(':profile_type', $attribute['profiletype']);
            $prep->bindParam(':no_of_profile', $attribute['profileno']);
            $prep->bindParam(':girl_no_of_profile', $attribute['girlprofileno']);
            $prep->bindParam(':guy_no_of_profile', $attribute['guyprofileno']);
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
            $sql="SELECT id,name,profile_type,slug,no_of_profile,girl_no_of_profile,guy_no_of_profile FROM categories WHERE deleted=0 AND (name LIKE :SEARCH OR profile_type LIKE :SEARCH OR slug LIKE :SEARCH) LIMIT $r,$l";
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
            $sql="SELECT count(id) FROM categories WHERE deleted=0 AND (name LIKE :SEARCH OR profile_type LIKE :SEARCH OR slug LIKE :SEARCH)";
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
            $sql="SELECT id,name,profile_type,slug,no_of_profile,girl_no_of_profile,guy_no_of_profile FROM categories
                    WHERE deleted=0 AND id=:ID";
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
    public function updateTopCity($top,$id)
    {
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="UPDATE categories SET top=:top_city WHERE id=:id";
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