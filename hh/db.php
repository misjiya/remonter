<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Db
{
    private $conn = null;
    public $limit = 25;
    public $created_by=null;
    public function conn()
    {
        $this->created_by=($_SESSION)?$_SESSION['USERNAME']:'';
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="hiddenheart_schema";
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        }
        catch(PDOException $e)
        {
            echo "Connection Error : " . $e->getMessage();
        }
        return $this->conn;
    }
}
?>