<?php
class Names{
  
    
    private $conn;
    private $table_name = "names";

    public $id;
    public $name;
    public $createdAt;
  
    public function __construct($db){
        $this->conn = $db;
    }

    // // read items
    // function read(){
    //     $query="SELECT name FROM ". $this->table_name .";
    //     $stmt =$this->conn->prepare($query);
    //     $stmt->execute();

    //     return $stmt;
    // }
    


    function create(){
        $query="INSERT INTO
        ". $this->table_name ."
        SET name=:name, createdAt=:createAt";

        $stmt=$this->conn->prepare($query);

        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->createdAt=htmlspecialchars(strip_tags($this->createdAt));

        $stmt->bindParam(":name", $this->nameValue);
        $stmt->bindParam(":createdAt", $this->createdAt);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
}
?>
