<?php
    class UsersClass {
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
        public function register($firstname, $lastname, $username, $password, $password2) {
            //ngecek nomor username nya dlu, udah ada apa belom
            
            $checkRegister = $this->pdo->query("SELECT username FROM users WHERE username = '$username'");
            
        
            if ($checkRegister->rowCount() > 0){
                return 'Exist';
            }
            else{
                
                
                //enkripsiin password
            
                $password = password_hash($password, PASSWORD_DEFAULT);
            
                //nambahin user baru ke database
                $result  = $this->pdo->prepare("INSERT INTO users(
                    first_name,
                    last_name,
                    username, 
                    password, 
                    password2)
                VALUES (:first_name, :last_name, :username, :password, :password2)"); 

                $result->bindParam(':first_name', $firstname);
                $result->bindParam(':last_name', $lastname);
                $result->bindParam(':username', $username);
                $result->bindParam(':password', $password);
                $result->bindParam(':password2', $password2);

                if($result->execute()) {
                    return 'Success';
                }
                else {
                    return 'Failed';
                }
            }
         
        } 

        public function login($username, $password) {
            $checkUser = $this->pdo->query("SELECT * FROM users WHERE username = '$username'");
            if ($checkUser->rowCount() > 0) {
                //cek password euy  
                $row = $checkUser->fetch(PDO::FETCH_OBJ);

                if (password_verify($password, $row->password)){
                    $_SESSION["id"]    = $row->id;
                    $_SESSION["login"] = true;

                    return true;
                }
            }

            return false;
        }

        public function loginUser($id){
            $checkUser = $this->pdo->query("SELECT * FROM users WHERE id = '$id'");
            if ($checkUser->rowCount() > 0) {
                $row = $checkUser->fetch(PDO::FETCH_OBJ);
                return $row;
            }
            return false;
        } 
    }
?>