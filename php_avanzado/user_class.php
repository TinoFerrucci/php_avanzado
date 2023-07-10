<?php
class Usuario{
    private $email;
    private $nombre;
    private $password;
    private $db_connection;

    function __construct($email, $nombre, $password, $db){
        $this->email = $email;
        $this->nombre = $nombre;
        $this->password = $password;
        $this->db_connection = $db;
    }

    function exists_in_db(){
        $res = $this->db_connection->select_one_query("SELECT * FROM usuarios WHERE email = '$this->email';");
        return ($res != null);
    }

    function create_user(){
        if ($this->exists_in_db()){
            return FALSE;
        }
        $this->db_connection->add_query("INSERT INTO usuarios(email, name, password) VALUES ('$this->email', '$this->nombre', '$this->password');");
        return TRUE;
    }

    function verify_user(){
        if ($this->exists_in_db()){
            $userDB = $this->db_connection->select_one_query("SELECT * FROM usuarios WHERE email = '$this->email';");
            $passwordDB = $userDB['password'];
            if (password_verify($this->password, $passwordDB)){
                $this->nombre = $userDB['name'];
                return TRUE;
            }
            return FALSE;
        }
        return FALSE;
    }

    function get_name(){
        return $this->nombre;
    }
}
?>