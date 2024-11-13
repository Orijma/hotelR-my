<?php


class PaymenttypesControleur
{

    private $parametre = array(); //tableau
    private $oModele; // Object
    private $oVue; // Object

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oModele = new PaymenttypesModele($parametre);

        $this->oVue = new PaymenttypesVue($parametre);
    }

    public function lister(){

        $valeurs = $this->oModele->getListePaymenttypes();

        $this->oVue->genererAffichagePaymenttypes($valeurs);

    }

    public function form_consulter(){

        $valeurs = $this->oModele->getUnPaymenttype();

        $this->oVue->genererAffichageFiche(valeurs: $valeurs);

    }
    public function ajouter(){
        $this->oModele->addPaymenttype();
        $this->lister();

    }
    public function supprimer(){
      $this->oModele->delPaymenttype();

     $this->lister();
    }


    public function modifier(){
        $this->oModele->updatePaymenttype();
    }

    public function updatePaymenttype(){
        $this->oModele->updatePaymenttype();
    }

    public function form_ajouter(){

        $this->oVue->genererAffichageAdd();

    }

    
    public function form_modifier(){
        $valeurs = $this->oModele->getUnPaymenttype();

        $this->oVue->genererAffichageUpdate($valeurs);

    }
    /*public function form_supprimer(){

        $this->oVue->genererAffichageDel();

    }*/
}
