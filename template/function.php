<?php
require("dbconfig.php");
class data{
    private $connection;
    public function __construct(){
        $this->connection=new mysqli(servername,username,password,db);
        if($this->connection->connect_error){
            
        }
    }
    public function insert($table,$data){
        $column=implode(',',array_keys($data));
        $values="'".implode("','",array_values($data))."'";
        $sql="INSERT INTO $table($column) VALUES ($values)";
        if($this->connection->query($sql)==TRUE){
            return "$sql";
        }else{
            return "ERROR";
        }
    }
}
    ?>