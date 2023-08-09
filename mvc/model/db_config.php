<?php
    class Database{
        private $host = "localhost";
        private $user ="root";
        private $pass="";
        private $dbname = "webassignment_shoes";
        private $conn = NULL;
        private $result = NULL;
        
        public function connect(){
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if (!$this->conn){
                echo "Can not connect to database.";
                exit();
            }
            else{
                mysqli_set_charset($this->conn, 'utf8');
            }
            return $this->conn;
        }

        public function execute($sql){  // execute some mySQL requests
            $this->result = $this->conn->query($sql);
            if (!$this->result) {
                echo "Query execution failed: " . $this->conn->error;
            }
            return $this->result;
        }

        public function getData(){
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data= 0;
            }
            return $data;
        }

        public function getAll($tbl){
            $sql =  "SELECT * FROM $tbl";
            $this->execute($sql);
            if($this->num_rows()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()){
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function getDataAt($table, $id){
            $sql = "SELECT * FROM $table WHERE id = '$id' ";
            $this->execute($sql);
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data= 0;
            }
            return $data;
        }

        public function num_rows(){
            if($this->result){
                $num = mysqli_num_rows($this->result);
            }
            else{
                $num = 0;
            }
            return $num;
        }

        public function InsertData($tbl, $name, $img, $note, $subcategory, $price){
            $sql = "INSERT INTO $tbl (product_name, image_path, product_note, product_subcategory, product_price)
                    VALUES (?, ?, ?, ?, ?)";
                    
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssssd", $name, $img, $note, $subcategory, $price);
                    
            return $stmt->execute();
        }

        public function updateData($tbl, $id, $name, $img, $note, $subcategory, $price){
            $sql = "UPDATE $tbl SET product_name = ?, image_path = ?, product_note = ?, product_subcategory = ?, product_price = ?
            WHERE id = ?";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssssdi", $name, $img, $note, $subcategory, $price, $id);
            
            return $stmt->execute();
        }

        function Delete($id, $tbl){
            $sql = "DELETE FROM $tbl WHERE id = ?";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $id);
            
            return $stmt->execute();

        }

        public function SearchData($table, $keyword) {
            $sql = "SELECT * FROM $table WHERE product_name LIKE ? OR product_note LIKE ? OR product_subcategory LIKE ?";
            $searchKeyword = "%" . $keyword . "%";
        
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sss", $searchKeyword, $searchKeyword, $searchKeyword);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            } else {
                return 0;
            }
        }
        
    }
    // $db = new Database();
    // $conne = $db->connect();
    // if ($conne) {
    //     echo "Connected to the database successfully.<br>";
    
    //     // Set the values for update
    //     $id = 2; // Specify the ID of the record you want to update
    //     $name = "Updated Shoe";
    //     $img = "updated.jpg";
    //     $note = "This is an updated shoe";
    //     $subcategory = "Formal";
    //     $price = 69.99;
    
    //     // Update data in the "shoes" table using the updateData function
    //     $updateResult = $db->updateData($id, $name, $img, $note, $subcategory, $price);
    
    //     if ($updateResult) {
    //         echo "Data updated successfully.<br>";
    //     } else {
    //         echo "Data update failed.<br>";
    //     }
    // } else {
    //     echo "Failed to connect to the database.<br>";
    // }
    
?>
    
    
    
    
    
    
    
    
    
    
