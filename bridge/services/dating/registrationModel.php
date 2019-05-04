<?php
include_once($_SERVER['DOCUMENT_ROOT']."/remonter/dating/db.php");
class RegistrationModel extends Db
{
    public $insert_id="";
    function validateUser($user){

    }
    function duplicateUser($email,$username){
        $connection = $this->conn();
        try{
           
            $sql="SELECT userid FROM app_userdata WHERE deleted=0 AND (email=:email OR  username=:username)";
            $prep = $connection->prepare($sql);
            $prep->bindParam(':email', $email);
            $prep->bindParam(':username', $username);
            $prep->execute();
            $prep->setFetchMode(PDO::FETCH_ASSOC);
            $result=$prep->fetch();
            return $result['userid'];
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            $result= false;
        }
    }
    function getCountyStateOnCity($city){
        try 
        {
            $connection =  $this->conn();
            $sql="SELECT s.name AS state, c.name AS country FROM cities ct 
                    INNER JOIN states s ON s.id=ct.state_id
                    INNER JOIN countries c ON c.id=s.country_id
                    WHERE ct.deleted=0 AND ct.name=:city";
            $prep =$connection->prepare($sql);
            $prep->bindParam(':city', $city);
            $prep->execute();
            $prep->setFetchMode(PDO::FETCH_ASSOC);
            $result=$prep->fetch();
            return $result;
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    public function registerUser($attribute)
    {
        $connection = $this->conn();
        $insert_id=0;
        try 
        {
            if(isset($attribute))
            {
                $sql="INSERT INTO app_userdata (username,`password`,email,gender,age,city,reg_date,state,country) VALUES (:username,:password,:email,:gender,:age,:city,:date,:state,:country)";
                
                $gender=($attribute['looking']=="Female")?"Male":"Female";
                $date=date('Y-m-d');
                $state=$this->getCountyStateOnCity($attribute['livein'])['state'];
                $country=$this->getCountyStateOnCity($attribute['livein'])['country'];
                $userid=date('dymHis');
                $prep = $connection->prepare($sql);
                $prep->bindParam(':username', $attribute['username']);
                $prep->bindParam(':password', $attribute['password']);
                $prep->bindParam(':email', $attribute['email']);
                $prep->bindParam(':gender', $gender);
                $prep->bindParam(':age', $attribute['age']);
                $prep->bindParam(':country', $country);
                $prep->bindParam(':state', $state);
                $prep->bindParam(':city', $attribute['livein']);
                $prep->bindParam(':date', $date);
                $prep->execute();
                $insert_id=$connection->lastInsertId();
                $attribute['userid'] =  $insert_id;
                $attribute['gender'] =  $gender;
                $attribute['country'] =  $country;
                $attribute['state']  =  $state;
            }
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
        return $attribute;
    }
}