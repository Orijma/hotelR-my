<?php
class connexionControleur {
        private $parametre;
        private $oModele;
        private $oVue;
    
        public function __construct($parametre) {
            $this->parametre = $parametre;
            $this->oModele = new connexionModele($this->parametre);
            $this->oVue = new connexionVue($this->parametre);
        }
    
        public function form_login() {
            $this->oVue->genererAffichageLogin();
        }
    
        public function login() {
            $user = $this->oModele->loginUser();
            if ($user) {
                $_SESSION['user'] = array(
                    'id' => $user['id'],
                    'username' => $user['username']
                );
                header('Location: index.php');
                exit();
            } else {
                $this->parametre['erreur'] = true;
                $this->oVue->genererAffichageLogin();
            }
        }

        public function register() {
            $result = $this->oModele->registerUser();
            if($result) {
                header('Location: index.php?gestion=connexion&action=form_login&success=1');
            } else {
                header('Location: index.php?gestion=connexion&action=form_login&error=2');
            }
        }

    public function logout() {
        session_destroy();
        header('Location: index.php?gestion=connexion&action=form_login');
    }
}



?>