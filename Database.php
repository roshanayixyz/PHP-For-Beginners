<?php




class database {
    public $connection;
    public function __construct (){
        $dsn = "mysql:host=localhost;port=3306;dbname=end;charset=utf8mb4";

        $this->connection= new PDO($dsn , 'root' ,'');
    }
    public function query($query){

        $statment = $this->connection->prepare($query);
        $statment->execute();
        return $statment;
    }
}


$db = new database();
dd(
    $db->query("SELECT * from notes")->fetchAll(PDO::FETCH_ASSOC));


