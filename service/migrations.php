<?php 


Class MigrationsService{

    private mysqli $connection;
    private string $sql;

    public function __construct(mysqli &$connection){
        $this->connection = $connection;
        $this->readSQL();
    }

    public function execute(){
        if($this->exists()){
            echo "Table already exists";
            return;
        }
        if($this->connection->multi_query($this->sql)){
            echo "Migration success";
        }else{
            echo "Migration failed";
        }
    }

    private function exists(){
        $result = $this->connection->query("SHOW TABLES LIKE 'orders'");
        return $result->num_rows > 0;
    }

    private function readSQL(){
        try{
            $this->sql = file_get_contents('migrations/order.sql');
        }catch(Exception $e){
            die($e->getMessage());
        }
    }


 

}