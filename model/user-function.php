<?php
class UserFunction
{
    private $conn;
    private $table_name = "Users";

    public function __construct($db)
    {
        $this->conn = $db->getConnection();
    }

    public function register($username, $firstname, $user_pass, $confirm_pass)
    {
        try {
            $query = "INSERT INTO " . $this->table_name . " (user_name, first_name, user_pass, confirm_pass) 
            VALUES (?, ?, ?, ?)";

            if($stmt = $this->conn->prepare($query)) {
                $stmt->bind_param("ssss", $username, $firstname, $user_pass, $confirm_pass);
                
                if(!$stmt->execute()) {
                    error_log("Execute failed: " . $stmt->error);
                    return false;
                }
                return true;
            }
            
            error_log("Prepare failed: " . $this->conn->error);
            return false;
            
        } catch(Exception $e) {
            error_log("Registration error: " . $e->getMessage());
            return false;
        }
    }

}
?>