<?php


class database{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "e-com_raw_php";
   
    private $mysqli = "";

    // coneection

    public function __construct()
    {
        
            $this->mysqli = new mysqli($this->servername, $this->username,$this->password,$this->db_name);
    }


    // detect duplicate
    public function exist($name,$table_name,$table_colmns){
        $sql = "SELECT $table_colmns FROM $table_name where $table_colmns='$name'";
        $result = $this->mysqli->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $x = $row[$table_colmns];
            }
        }else{
          $x = '';
        }
        //return name 
        return $x;
        
}


    // insert data
    public function insert($table_name,$values=array()){
        $table_colmns = implode(', ',array_keys($values));
        $table_values = implode("', '",$values);       
        $sql = "insert into $table_name ($table_colmns) values ('$table_values')";
        $this->mysqli->query($sql);

    }


    // show data
    public function show($table_name){
        $sql = "select * from $table_name";
        $x = $this->mysqli->query($sql);
        //return table
        return $x;

    }


    // status print funtion
    public function statusbtn($status,$id,$header_location,$table_name){
        if($status==1){
            return '<a href="ainc/status.php?id='.$id.'&status=0&location='.$header_location.'&table_name='.$table_name.'" type="button" class="btn btn-info btn-sm btn_size" >Active</a>';
        }else{
            return '<a href="ainc/status.php?id='.$id.'&status=1&location='.$header_location.'&table_name='.$table_name.'" type="button" class="btn btn-info btn-sm btn_size" >Deactive</a>';
        } 
    }


    // update status active inactive function

    public function update_status($id,$status,$table_name){
        $sql = "update $table_name set status=$status where id = $id";
        $this->mysqli->query($sql);

    }






    // close connection
    public function __destruct()
    {
        $this->mysqli->close();


    }


















}


?>