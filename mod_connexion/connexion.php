<?php
require_once 'controller/connexionController.php';
require_once 'modele/connexionModele.php';
require_once 'vue/connexionVue.php';

class connexion {
    private $parametre = array();
    private $oControleur;

    public function __construct($parametre) {
        $this->parametre = $parametre;
        $this->oControleur = new connexionControleur($parametre);
    }

    public function choixAction() {
        if(isset($this->parametre['action'])) {
            switch($this->parametre['action']) {
                case 'register':
                    $this->oControleur->register();
                    break;
                case 'login':
                    $this->oControleur->login();
                    break;
                case 'logout':
                    $this->oControleur->logout();
                    break;
                case 'profil' : 
                    $this->oControleur->profil();
                    break;
                case 'form_register':
                    $this->oControleur->form_register();
                    break;
                default:
                    $this->oControleur->form_login();
            }
        } else {
            $this->oControleur->form_login();
        }
    }
}