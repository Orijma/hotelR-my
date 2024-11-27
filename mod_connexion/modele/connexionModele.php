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
        if (!isset($this->parametre['username']) || !isset($this->parametre['password'])) {
            return false;
        }

        $username = htmlspecialchars($this->parametre['username']);
        $password = $this->parametre['password'];

        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        $resultat = $this->connexion->executeRequete($sql, array($username));
        
        if ($resultat->rowCount() > 0) {
            $user = $resultat->fetch(PDO::FETCH_ASSOC);
            
            if (password_verify($password, $user['password'])) {
                return array(
                    'id' => $user['id'],
                    'username' => $user['username']
                );
            }
        }
        
        return false;
    }

}