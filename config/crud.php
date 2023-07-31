<?php
    class crud {
        private $db;

        function __construct($conn) {
            $this->db = $conn;
        }

        public function insert($cname, $cdesc, $cpix) {
            try {
                $sql = "INSERT INTO Cats (catname, catdescription, catpix) VALUES (:cname, :cdesc, :cpix)";
                $stmt = $this->db->prepare($sql);

                // Bind parameters to the prepared statement
                $stmt->bindParam(':cname', $cname);
                $stmt->bindParam(':cdesc', $cdesc);
                $stmt->bindParam(':cpix', $cpix);

                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }

        public function editCat($id, $cname, $cdesc, $cpix) {
            $sql = "UPDATE Cats SET catname=:cname, catdescription=:cdesc, catpix=:cpix WHERE cat_id=:id";
            $stmt = $this->db->prepare($sql);
            
            // Bind parameters to the prepared statement
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':cname', $cname);
            $stmt->bindParam(':cdesc', $cdesc);
            $stmt->bindParam(':cpix', $cpix);
            
            // Execute the UPDATE query
            try {
                $stmt->execute();
                return true; 
            } catch (PDOException $e) {
                echo "Error updating record: " . $e->getMessage();
                return false; // Return false to indicate the update failed.
            }
        }
        

        public function getCats() {
            $sql ="SELECT * FROM Cats";
            $result = $this->db->query($sql);
            return $result;
        }

        public function getCatDetails($id) {
            $sql ="SELECT * FROM Cats where cat_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;

        }

        public function deleteCat($id) {
            $sql = "DELETE FROM Cats where cat_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        }

        public function insertAcc($accname, $address, $email, $phone, $mrt, $accpix) {
            try {
                $sql = "INSERT INTO Accommodation (accname, address, email, phone, mrt, accpix) VALUES (:aname, :add, :em, :ph, :mrt, :apix)";
                $stmt = $this->db->prepare($sql);

                // Bind parameters to the prepared statement
                $stmt->bindParam(':aname', $accname);
                $stmt->bindParam(':add', $address);
                $stmt->bindParam(':em', $email);
                $stmt->bindParam(':ph', $phone);
                $stmt->bindParam(':mrt', $mrt);
                $stmt->bindParam(':apix', $accpix);

                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getAccs() {
            $sql ="SELECT * FROM Accommodation";
            $result = $this->db->query($sql);
            return $result;
        }

        public function getAccDetails($id) {
            $sql ="SELECT * FROM Accommodation where acc_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }
        public function deleteAcc($id) {
            $sql = "DELETE FROM Accommodation where acc_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        }


    }
?>
