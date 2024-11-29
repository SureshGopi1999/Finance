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
    public function user($table,$sdate,$edate,$vtype,$vname,$vno){
        $sql="SELECT * FROM $table WHERE lname = '$vname' AND vouchertype = '$vtype' AND voucherno = '$vno' AND  STR_TO_DATE(date, '%Y-%m-%d') BETWEEN STR_TO_DATE('$sdate', '%Y-%m-%d') 
                                             AND STR_TO_DATE('$edate', '%Y-%m-%d') 
        ORDER BY STR_TO_DATE(date, '%Y-%m-%d')";
        $result=$this->connection->query($sql);
        $users=[];
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
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
    public function ledgerreport($table, $ledger) {
    
    $sql = "SELECT * FROM $table WHERE lname='$ledger'";
    $res = $this->connection->query($sql);
    $report=[];
    if($res->num_rows>0){
        while($row->fetch_assoc()){
            $report[]=$row;
            }
        }
        return $report;
        
    }
    public function onlydayledge($table,$check){
        $sql = "SELECT * FROM $table WHERE lname='$ledger' ORDER BY STR_TO_DATE(date, '%Y-%m-%d')";
        $res = $this->connection->query($sql);
        $report = [];
        if($res->num_rows>0){
            while($row->fetch_assoc()){
                $report[]=$row;
                }
            }
            return $report;
    }
    public function onlymonthledge($table,$check){
        $sql = "SELECT MONTH(STR_TO_DATE(date, '%Y-%m-%d')) AS month, 
        SUM(debit) AS total_debit, SUM(credit) AS total_credit
 FROM $table 
 WHERE lname = '$ledger' 
 GROUP BY MONTH(STR_TO_DATE(date, '%Y-%m-%d')) 
 ORDER BY month";
 $res = $this->connection->query($sql);
 $report = [];
 if($res->num_rows>0){
     while($row->fetch_assoc()){
         $report[]=$row;
         }
     }
     return $report;

    }
    public function fdatedayeledge($table,$check,$fdate,$tdate){
        $sql = "SELECT * 
        FROM $table 
        WHERE lname = '$ledger' 
        AND STR_TO_DATE(date, '%Y-%m-%d') BETWEEN STR_TO_DATE('$fdate', '%Y-%m-%d') 
                                             AND STR_TO_DATE('$tdate', '%Y-%m-%d') 
        ORDER BY STR_TO_DATE(date, '%Y-%m-%d')";
        $res = $this->connection->query($sql);
        $report = [];
        if($res->num_rows>0){
            while($row->fetch_assoc()){
                $report[]=$row;
                }
            }
            return $report;
    }
    public function fdatemonthledge($table,$check,$fdate,$tdate){
        $sql = "SELECT 
                        DATE_FORMAT(STR_TO_DATE(date, '%Y-%m-%d'), '%Y-%m') AS month,
                        SUM(debit) AS total_debit, SUM(credit) AS total_credit
                    FROM $table
                    WHERE lname = '$ledger'
                      AND STR_TO_DATE(date, '%Y-%m-%d') BETWEEN STR_TO_DATE('$fdate', '%Y-%m-%d') 
                                                           AND STR_TO_DATE('$tdate', '%Y-%m-%d')
                    GROUP BY DATE_FORMAT(STR_TO_DATE(date, '%Y-%m-%d'), '%Y-%m')
                    ORDER BY month";
                     $res = $this->connection->query($sql);
                     $report = [];
                     if($res->num_rows>0){
                         while($row->fetch_assoc()){
                             $report[]=$row;
                             }
                         }
                         return $report;

    }
    public function ftledge($table,$fdate,$tdate){
        $sql = "SELECT * 
                    FROM $table 
                    WHERE lname = '$ledger' 
                      AND STR_TO_DATE(date, '%Y-%m-%d') BETWEEN STR_TO_DATE('$fdate', '%Y-%m-%d') 
                                                           AND STR_TO_DATE('$tdate', '%Y-%m-%d') 
                    ORDER BY STR_TO_DATE(date, '%Y-%m-%d')";
                    $res = $this->connection->query($sql);
                    $report = [];
                    if($res->num_rows>0){
                        while($row->fetch_assoc()){
                            $report[]=$row;
                            }
                        }
                        return $report;
    }
    public function vouchernum($table,$vname){
        $sql = "SELECT * FROM $table WHERE lname = '$vname'";
        $res = $this->connection->query($sql);
        $vno = [];
        if($res->num_rows == 1){
            while($row=$res->fetch_assoc()){
                $vno[]=$row['voucherno'];
            }
        }
        return $vno;

    }
    
}

    ?>