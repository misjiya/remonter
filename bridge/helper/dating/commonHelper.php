<?php
include_once($_SERVER['DOCUMENT_ROOT']."/hheart/dating/db.php");
class CommonHelper extends Db
{
    public function fetchTopCities()
    {
        $result=array();
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT id,name FROM  cities WHERE deleted=0 AND top=1 ORDER BY name ASC";
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
    public function fetchSeoContent($seoType='All')
    {
        $result=array();
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT * FROM seo_containt WHERE deleted=0 AND seoType=:seoType";
            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':seoType', $seoType);
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
    public function fetchGenericPages()
    {
        $result=array();
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT * FROM generic_page WHERE deleted=0";
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
    public function fetchGenericContents($slug='')
    {
        $result=array();
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT * FROM generic_page WHERE deleted=0 AND slug=:slug";
            $prep = $this->conn()->prepare($sql);
            $prep->bindParam(':slug', $slug);
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
    function JSONResponse($status,$message='',$data=array())
    {
        $DATA=array(
           'status'=>strtolower($status),
           'message'=>$message,
           'data'=>$data
        );
        return json_encode($DATA);

    }
    function validateUser($user){

    }
    function duplicateUser($email,$username){
        $sql="SELECT userid FROM app_userdata WHERE deleted=0 AND (email=:email OR  username=:username)";
        $prep = $this->conn()->prepare($sql);
        $prep->bindParam(':email', $email);
        $prep->bindParam(':username', $username);
        $prep->execute();
        $prep->setFetchMode(PDO::FETCH_ASSOC);
        $result=$prep->fetch();
        return $result['userid'];
    }
    
    public function registerUser($attribute)
    {
        $result=false;
        try 
        {
            $this->conn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if(isset($attribute))
            {
                $sql="INSERT INTO app_userdata (username,`password`,email,gender,age,city,reg_date) VALUES (:username,:password,:email,:gender,:age,:city,:date)";
                $gender=($attribute['looking']=="Female")?"Male":"Female";
                $prep = $this->conn()->prepare($sql);
                $prep->bindParam(':username', $attribute['username']);
                $prep->bindParam(':password', $attribute['password']);
                $prep->bindParam(':email', $attribute['email']);
                $prep->bindParam(':gender', $gender);
                $prep->bindParam(':age', $attribute['age']);
                $prep->bindParam(':city', $attribute['livein']);
                $prep->bindParam(':date', $date);
                $prep->execute();
                $this->conn()->lastInsertId();
                $result= true;
            }
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            $result= false;
        }
        return $result;
    }
}