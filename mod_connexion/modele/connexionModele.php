<?php
class connexionModele extends modele {
    private $parametre = array();

    public function __construct($parametre) {
        $this->parametre = $parametre;
    }

    public function registerUser() {
        $username = $this->parametre['username'];
        $email = $this->parametre['email'];
        $password = password_hash($this->parametre['password'], PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        return $this->executeRequete($sql, array($username, $email, $password));
    }

    public function loginUser() {
        $sql = "SELECT * FROM users WHERE username = ?";
        $resultat = $this->executeRequete($sql, array($this->parametre['username']));
        
        if($resultat->rowCount() > 0) {
            $user = $resultat->fetch(PDO::FETCH_ASSOC);
            if(password_verify($this->parametre['password'], $user['password'])) {
                return $user;
            }
        }
        return false;
    }
}