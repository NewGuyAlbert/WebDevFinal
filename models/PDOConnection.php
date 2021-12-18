<?php
class PDOConnection {

    private String $host = 'localhost';
    private String $db = 'chinook_abridged';
    private String $user = 'root';
    private String $pwd = '';
    private String $charset = 'utf8mb4';

    private PDO $pdo; 

    function __construct (){
        $dsn="mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $options=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,];
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pwd, $options);
            echo "Connection succesfull";
        }catch (\PDOException $e) {
            echo "Connection failed\n";
            echo $e->getMessage();
        }
    }

    function __get($property) {
        if ($property === "pwd") {
            return "Acees to the password is denied";
        }
    }

    function __set($property, $value) {
        if($property === "pwd") {
            echo "Password cannot be changed";
        }
    }

    function testQuery(){
        $stmt = $this->pdo->query('SELECT * FROM customer');
        while($user=$stmt->fetch()){
            print_r($user);
            echo'<br>';
        }
    }
}

?>