<?php
class connexionControleur {
    private $parametre = array();
    private $oModele;
    private $oVue;

    public function __construct($parametre) {
        $this->parametre = $parametre;
        $this->oModele = new connexionModele($parametre);
        $this->oVue = new connexionVue($parametre);
    }

    public function form_login() {
        $this->oVue->genererAffichageLogin();
    }

    public function login() {
        $user = $this->oModele->loginUser();
        if($user) {
            $_SESSION['user'] = $user;
            $_SESSION['username'] = $user['username'];
            header('Location: index.php');
        } else {
            header('Location: index.php?gestion=connexion&action=form_login&error=1');
        }
    }

    public function register() {
        $result = $this->oModele->registerUser();
        if($result) {
            // Redirection vers la page de connexion avec message de succès
            header(header: 'Location: index.php?gestion=connexion&action=form_login&success=1');
        } else {
            // Redirection vers le formulaire avec message d'erreur
            header('Location: index.php?gestion=connexion&action=form_login&error=2');
        }
    }

    public function profil() {
        $userData = $this->oModele->getUserData($_SESSION['user']['id']);
        $this->oVue->genererAffichageProfil($userData);

    }

    public function logout() {
        session_destroy();
        header('Location: index.php?gestion=connexion&action=form_login');
    }
}



?>