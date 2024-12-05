<?php
require("dbconfig.php");
class data{
    private $connection;
    public function __construct(){
        $this->connection=new mysqli(servername,username,password,db);
        if($this->connection->connect_error){
            
        }
    }

// Register
public function loginsert($table,$name,$password){
    $regsql="SELECT * FROM $table WHERE name='$name'";
    $res=$this->connection->query($regsql);
    // echo"Count:".$res->num_rows;
    // exit();// stop line
    if($res->num_rows>0){
        $user=$res->fetch_assoc();
        $password = $user['password'];
        if(password_verify($password,$password)){
            return "success";
        }else{
            return "Error";
        }
            // return $user;
        }
    }
    // return true;
// }

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


    public function user1($table){
        $sql="SELECT * FROM $table";
		// $link = $this->connection();
        $result=$this->connection->query($sql);
        $users=[];
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $users[]=$row;
            }
        }
        return $users;
    }


    public function user($table,$sdate,$edate,$vtype,$vname,$vno){
        $sql = "SELECT * FROM $table where vouchertype = '$vtype' OR lname = '$vname' OR voucherno = '$vno' OR STR_TO_DATE(date, '%Y-%m-%d') BETWEEN STR_TO_DATE('$sdate', '%Y-%m-%d') 
                                             AND STR_TO_DATE('$edate', '%Y-%m-%d') 
        ORDER BY STR_TO_DATE(date, '%Y-%m-%d')";
        $res = $this->connection->query($sql);
        $users = [];
        if($res->num_rows>0){
            while($row=$res->fetch_assoc()){
                $users[]=$row;
            }
        }
        return $users;
    }
    
    
    public function ledger($table){
        $sql = "SELECT * FROM $table";
        $res = $this->connection->query($sql);
        $ledgers=[];
        if($res->num_rows>0){
            while($row=$res->fetch_assoc()){
                $ledgers[]=$row;
            }
        }
        return $ledgers;
    }
    public function ledgerreportday($table,$ledger){
        $ledge = [];
            $sql = "SELECT * FROM $table WHERE lname = '$ledger' ORDER BY date";
            $res = $this->connection->query($sql);
            if($res->num_rows>0){
                while($row = $res->fetch_assoc()){
                    $ledge[] = $row;
                }
            }
        return $ledge;
    }
    public function ledgerreportmonth($table,$ledger){
        $ledge1 = [];
        $sql = "SELECT DATE_FORMAT(date, '%M') AS month_name , lname,vouchertype,voucherno,SUM(debit) AS total_debit,SUM(credit) AS total_credit FROM $table WHERE lname = '$ledger' GROUP BY DATE_FORMAT(date, '%Y-%m') ORDER BY date";
        $res = $this->connection->query($sql);
        if($res->num_rows>0){
            while($row = $res->fetch_assoc()){
                $ledge1[] = $row;
            }
        }
    return $ledge1;
    }
    public function ledgerdayftdate($table,$ledger,$fdate,$tdate){
        $sql = "SELECT * FROM $table WHERE lname = '$ledger' AND date BETWEEN '$fdate' AND '$tdate' ORDER BY date";
        $res = $this->connection->query($sql);
        $ledger2=[];
        if($res->num_rows>0){
            while($row = $res->fetch_assoc()){
                $ledger2[]=$row;
            }
        }
        return $ledger2;
    }
    public function ledgermonthftdate($table,$ledger,$fdate,$tdate){
        $sql = "SELECT  DATE_FORMAT(date, '%M') AS month_name , lname, vouchertype, voucherno, SUM(debit) AS total_debit,SUM(credit) AS total_credit FROM $table WHERE lname='$ledger' AND date BETWEEN '$fdate' AND '$tdate' GROUP BY DATE_FORMAT(date, '%Y-%m') ORDER BY date";
        $res = $this->connection->query($sql);
        $ledger3 = [];
        if($res->num_rows>0){
            while($row = $res->fetch_assoc()){
                $ledger3[]=$row;
            }
        }
        return $ledger3;
    }
    public function ledgerftdate($table,$ledger,$fdate,$tdate){
        $sql = "SELECT * FROM $table WHERE lname = '$ledger' AND date BETWEEN '$fdate' AND '$tdate' ORDER BY date";
        $res = $this->connection->query($sql);
        $ledger4 = [];
        if($res->num_rows>0){
            while($row = $res->fetch_assoc()){
                $ledger4[]=$row;
            }
        }
        return $ledger4;
    }
    
}

    ?>