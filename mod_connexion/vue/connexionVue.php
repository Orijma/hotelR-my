<?php
class connexionVue {
    private $parametre = array();
    private $tpl;

    public function __construct($parametre) {
        $this->parametre = $parametre;
        $this->tpl = new Smarty();
    }

    private function chargementValeurs() {
        if(isset($_SESSION['username'])) {
            $this->tpl->assign('login', $_SESSION['username']);
        } else {
            $this->tpl->assign('login', 'Visiteur');
        }
        $this->tpl->assign('titreVue', 'Connexion / Inscription');
        
        // Gestion des messages d'erreur
        if(isset($this->parametre['error'])) {
            switch($this->parametre['error']) {
                case '1':
                    $this->tpl->assign('messageErreur', 'Identifiants incorrects');
                    break;
                case '2':
                    $this->tpl->assign('messageErreur', 'Erreur lors de l\'inscription');
                    break;
            }
        }
        
        if(isset($this->parametre['success'])) {
            $this->tpl->assign('messageSuccess', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');
        }
    }

    public function genererAffichageLogin() {
        $this->chargementValeurs();
        $this->tpl->assign('titrePage', 'Connexion au système');
        $this->tpl->display('mod_connexion/vue/connexionVue.tpl');
    }
}