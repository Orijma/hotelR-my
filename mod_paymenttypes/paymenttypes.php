<?php


class Paymenttypes
{

    private $parametre = array(); //tableau
    private $oControleur; // Object

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oControleur = new PaymenttypesControleur($parametre);
    }



    public function choixAction(){

        if(isset($this->parametre['action'])){

            switch($this->parametre['action']){

                case 'ajouter' : 
                    $this->oControleur->ajouter();
                    break;

                case 'form_ajouter' :

                   // echo "Vers formulaire en ajout";
                    // die();

                    
                    $this->oControleur->form_ajouter();

                    break;

                case 'form_consulter' :

                    //echo "Vers formulaire en consultation";
                    //die();

                    $this->oControleur->form_consulter();

                    break;

                case 'modifier' : 
                    $this->oControleur->modifier();
                    break;

                case 'form_modifier' :

                   /* echo "Vers formulaire en modification";
                    die(); */

                    $this->oControleur->form_modifier();

                    break;

                  case 'supprimer':
                    $this->oControleur->supprimer();
                    break;

               /* case 'form_supprimer' :

                  // echo "Vers formulaire en suppression";
                   // die();

                    $this->oControleur->form_supprimer();

                    break; */
            }

        }else{

            $this->oControleur->lister();
        }

    }

}
