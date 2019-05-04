<?php
include_once($_SERVER['DOCUMENT_ROOT']."/remonter/hh/db.php");
class GenericModel extends Db
{
    public $insert_id=null;
    public function insert($attribute)
    {
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO generic_page (
                                name,
                                title,
                                slug,
                                description,
                                body,
                                created_by
                            ) VALUES (
                                :name,
                                :title,
                                :slug,
                                :description,
                                :body,
                                :created_by
                    )";

            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':name', $attribute['name']);
            $prep->bindParam(':title', $attribute['title']);
            $prep->bindParam(':slug', $attribute['slug']);
            $prep->bindParam(':description', $attribute['description']);
            $prep->bindParam(':body', $attribute['body']);
            $prep->bindParam(':created_by', $this->created_by);
            $prep->execute();
            $this->insert_id=$this->conn()->lastInsertId();
            return true;
        }
        catch(PDOException $e)
        {
            var_dump($e->getMessage());
            echo $sql . "<br>" . $e->getMessage();
            return false;
        }
    }
    public function update($attribute,$id)
    {
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="UPDATE generic_page SET 
                            name=:name,
                            title=:title,
                            slug=:slug,
                            description=:description,
                            body=:body
                    WHERE id=:id";

            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':name', $attribute['name']);
            $prep->bindParam(':title', $attribute['title']);
            $prep->bindParam(':slug', $attribute['slug']);
            $prep->bindParam(':description', $attribute['description']);
            $prep->bindParam(':body', $attribute['body']);
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
            $sql="SELECT id,name,title,slug,description FROM generic_page WHERE deleted=0 AND (name LIKE :SEARCH OR title LIKE :SEARCH OR slug LIKE :SEARCH) LIMIT $r,$l";
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
            $sql="SELECT count(id) FROM generic_page WHERE deleted=0 AND (name LIKE :SEARCH OR title LIKE :SEARCH OR slug LIKE :SEARCH)";
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
            $sql="SELECT    id,
                            name,
                            title,
                            slug,
                            description,
                            body
                FROM generic_page
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
}