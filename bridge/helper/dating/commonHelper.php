<?php
include_once($_SERVER['DOCUMENT_ROOT']."/remonter/dating/db.php");
class CommonHelper extends Db
{
    public function fetchTopCities()
    {
        $connection =  $this->conn();
        $result=array();
        try 
        {
           
            $sql="SELECT id,name FROM  cities WHERE deleted=0 AND top=1 ORDER BY name ASC";
            $prep = $connection->prepare($sql);
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
        $connection = $this->conn();
        $result=array();
        try 
        {
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT * FROM seo_containt WHERE deleted=0 AND seoType=:seoType";
            $prep = $connection->prepare($sql);
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
        $connection = $this->conn();
        $result=array();
        try 
        {
            $sql="SELECT * FROM generic_page WHERE deleted=0";
            $prep = $connection->prepare($sql);
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
        $connection = $this->conn();
        $result=array();
        try 
        {
            $sql="SELECT * FROM generic_page WHERE deleted=0 AND slug=:slug";
            $prep = $connection->prepare($sql);
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
    function encrypt_decrypt($value,$type){
        if($type=="encrypt"){
            $newp = base64_encode($value);
            $ssec = openssl_encrypt($newp,"AES-128-ECB","MbQeThWm#@^");
            return $ssec;
        }else if($type=="decrypt"){
            $dcp = openssl_decrypt($value,"AES-128-ECB","MbQeThWm#@^");
            $dp = base64_decode($dcp);
            return $dp;
        }
    }
    public function insertUserProfileOnGender($attribute){
        $connection = $this->conn();
        try{
            $gender=$attribute['gender'];
            $userid=$attribute['userid'];
            if(isset($gender) && ($gender=="Male" || $gender=="Female") && isset($userid) && $userid>0){
                $table = "app_female_profile";
                if($gender=="Male"){
                    $table = "app_male_profile";
                }
                $date=date('Y-m-d');
                $sql="INSERT INTO $table (userid,username,email,age,city,reg_date,state,country) VALUES (:userid,:username,:email,:age,:city,:date,:state,:country)";
                $prep = $connection->prepare($sql);
                $prep->bindParam(':userid', $userid);
                $prep->bindParam(':username', $attribute['username']);
                $prep->bindParam(':email', $attribute['email']);
                $prep->bindParam(':age', $attribute['age']);
                $prep->bindParam(':country', $attribute['country']);
                $prep->bindParam(':state', $attribute['state']);
                $prep->bindParam(':city', $attribute['livein']);
                $prep->bindParam(':date', $date);
                $prep->execute();
            }
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        return $userid;
    }

    public function uploadImage($target_dir,$image,$source='',$userid=''){
        $connection = $this->conn();
        $response=false;
        try{
            if(isset($target_dir) && isset($image) && isset($source) && isset($userid)) 
            {
                $temp = explode(".", $_FILES[$image]["name"]);
                $newfilename = round(microtime(true)).'-'.$userid. '.' . end($temp);
                $target_file = $target_dir . basename($newfilename);
                if (move_uploaded_file($_FILES[$image]["tmp_name"], $target_file)) 
                {
                    $date=date('Y-m-d');
                    $sql="INSERT INTO app_upload_file (userid,file_path,file_source,uploaded_date) VALUES (:userid,:file_path,:file_source,:date)";
                    $prep = $connection->prepare($sql);
                    $prep->bindParam(':userid', $userid);
                    $prep->bindParam(':file_path', $target_file);
                    $prep->bindParam(':file_source', $source);
                    $prep->bindParam(':date', $date);
                    $prep->execute();
                    $response=true;
                }
            }           
            
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        return $response;
                
    }
}