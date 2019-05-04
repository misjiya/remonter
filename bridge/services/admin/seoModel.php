<?php
include_once($_SERVER['DOCUMENT_ROOT']."/hheart/hh/db.php");
class SeoModel extends Db
{
    public $insert_id=null;
    public function insert($attribute)
    {
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO seo_containt (
                                seotype,
                                title,
                                description,
                                keyword,
                                con1,
                                con2,
                                con3,
                                con4,
                                con5,
                                con6,
                                header1,
                                header2,
                                header3,
                                header4,
                                header5,
                                header6,
                                created_by
                            ) VALUES (
                                :seotype,
                                :title,
                                :description,
                                :keyword,
                                :con1,
                                :con2,
                                :con3,
                                :con4,
                                :con5,
                                :con6,
                                :header1,
                                :header2,
                                :header3,
                                :header4,
                                :header5,
                                :header6,
                                :created_by
                    )";

            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':seotype', $attribute['seotype']);
            $prep->bindParam(':title', $attribute['title']);
            $prep->bindParam(':description', $attribute['description']);
            $prep->bindParam(':keyword', $attribute['keyword']);
            $prep->bindParam(':con1', $attribute['con1']);
            $prep->bindParam(':con2', $attribute['con2']);
            $prep->bindParam(':con3', $attribute['con3']);
            $prep->bindParam(':con4', $attribute['con4']);
            $prep->bindParam(':con5', $attribute['con5']);
            $prep->bindParam(':con6', $attribute['con6']);
            $prep->bindParam(':header1', $attribute['header1']);
            $prep->bindParam(':header2', $attribute['header2']);
            $prep->bindParam(':header3', $attribute['header3']);
            $prep->bindParam(':header4', $attribute['header4']);
            $prep->bindParam(':header5', $attribute['header5']);
            $prep->bindParam(':header6', $attribute['header6']);
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
            $sql="UPDATE seo_containt SET 
                            seotype=:seotype,
                            title=:title,
                            description=:description,
                            keyword=:keyword,
                            con1=:con1,
                            con2=:con2,
                            con3=:con3,
                            con4=:con4,
                            con5=:con5,
                            con6=:con6,
                            header1=:header1,
                            header2=:header2,
                            header3=:header3,
                            header4=:header4,
                            header5=:header5,
                            header6=:header6
                    WHERE id=:id";

            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':seotype', $attribute['seotype']);
            $prep->bindParam(':title', $attribute['title']);
            $prep->bindParam(':description', $attribute['description']);
            $prep->bindParam(':keyword', $attribute['keyword']);
            $prep->bindParam(':con1', $attribute['con1']);
            $prep->bindParam(':con2', $attribute['con2']);
            $prep->bindParam(':con3', $attribute['con3']);
            $prep->bindParam(':con4', $attribute['con4']);
            $prep->bindParam(':con5', $attribute['con5']);
            $prep->bindParam(':con6', $attribute['con6']);
            $prep->bindParam(':header1', $attribute['header1']);
            $prep->bindParam(':header2', $attribute['header2']);
            $prep->bindParam(':header3', $attribute['header3']);
            $prep->bindParam(':header4', $attribute['header4']);
            $prep->bindParam(':header5', $attribute['header5']);
            $prep->bindParam(':header6', $attribute['header6']);
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
            $sql="SELECT id,title,seotype,description,keyword FROM seo_containt WHERE deleted=0 AND (title LIKE :SEARCH OR seotype LIKE :SEARCH) LIMIT $r,$l";
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
            $sql="SELECT count(id) FROM seo_containt WHERE deleted=0 AND (title LIKE :SEARCH OR seotype LIKE :SEARCH)";
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
                            seotype,
                            title,
                            description,
                            keyword,
                            con1,
                            con2,
                            con3,
                            con4,
                            con5,
                            con6,
                            header1,
                            header2,
                            header3,
                            header4,
                            header5,
                            header6 FROM seo_containt
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