<?php
    require_once('connection.php'); //Importo mi conexión
    session_start(); //Genero una sesion

    class login extends Connection{

        public function __construct() {
            $this->db = parent::__construct();
        }

        public function login($email, $pass){
            $rows = null;
            $statement = $this->db->prepare('SELECT * FROM accounts WHERE email = :email AND pass = :pass');
            $statement->bindParam(':email', $email);
            $statement->bindParam(':pass', $pass);
            $statement->execute();
            if($statement->rowCount() == 1){
                $result = $statement->fetch();
                $_SESSION['NOMBRE'] = $result['name'] . " " . $result['lname'];
                $_SESSION['ID'] = $result['AID'];
                return true;
            }
            return false;
        }

        public function getName(){
            return $_SESSION['NOMBRE'];
        }
        public function getId() {
            return $_SESSION['ID'];
        }

        public function validateSession() {
            if ($_SESSION['ID'] == NULL) {
                // header('Location: ../../index.php');
            }
        }
    }
?>