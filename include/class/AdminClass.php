<?php
    class AdminClass {
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
        public function loginbyAdmin($usernameAdmin, $passwordAdmin) {
            $checkAdmin = $this->pdo->query("SELECT * FROM admins WHERE username = '$usernameAdmin'");
            if ($checkAdmin->rowCount() > 0) {
                //cek password euy  
                $rowAdmin = $checkAdmin->fetch(PDO::FETCH_OBJ);

                if (password_verify($passwordAdmin, $rowAdmin->password)){
                    $_SESSION["idAdmin"]    = $rowAdmin->id;
                    $_SESSION["loginAdmin"] = true;

                    return true;
                }
            }

            return false;
        }

        public function dataloginAdmin($id){
            $checkAdmin = $this->pdo->query("SELECT * FROM admins WHERE id = '$id'");
            if ($checkAdmin->rowCount() > 0) {
                $rowAdmin = $checkAdmin->fetch(PDO::FETCH_OBJ);
                return $rowAdmin;
            }
            return false;
        } 
    }
?>