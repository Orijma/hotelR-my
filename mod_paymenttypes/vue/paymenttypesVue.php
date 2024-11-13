<?php


class PaymenttypesVue
{

    private $parametre = array(); //tableau
    private $tpl; // objet smarty



    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->tpl = new Smarty();

    }

    private function chargementValeurs() {

        $this->tpl->assign('login', 'Ici le nom de la personne identifiée');

        $this->tpl->assign('titreVue', 'Les Hôtels');

    }


    public function genererAffichagePaymenttypes($valeurs){


        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Liste des types de paiements');

        $this->tpl->assign('listePaymenttypes', value: $valeurs);

        $this->tpl->display('mod_paymenttypes/vue/paymenttypesListeVue.tpl');
    }

    public function genererAffichageFiche($valeurs){

        $this->chargementValeurs();

        $this->tpl->assign('titrePage', value: 'Fiche Type de Paiement : Consultation');

        $this->tpl->assign('unPaiementtype', value: $valeurs);

        $this->tpl->display(template: 'mod_paymenttypes/vue/paymenttypesFicheVue.tpl');

    }

    public function genererAffichageAdd(){ 
        $this->chargementValeurs();
        $this->tpl->assign('titrePage', value: 'Fiche Type de Paiement : Ajouter paiement');
        $this->tpl->display(template: 'mod_paymenttypes/vue/paymentypesAjouterVue.tpl');
    }

    public function genererAffichageUpdate($valeurs){ 
        $this->chargementValeurs();
        $this->tpl->assign('titrePage', value: 'Fiche Type de Paiement : Modifier paiement');
        $this->tpl->assign('unPaiementtype', value: $valeurs);
        $this->tpl->display(template: 'mod_paymenttypes/vue/paymenttypesUpdateVue.tpl');
    }



}
