<?php
/**
 *  Class PaymenttypesModele
 * 	Classe héritée de la classe abstraite Modele (modele.php)
 *
 */

class PaymenttypesModele extends modele
{
    private $parametre = array(); //tableau


    function __construct($parametre)
    {

        $this->parametre = $parametre;
    }


    public function getListePaymenttypes()
    {

        $sql = "SELECT * FROM paymenttypes";

        $resultat = $this->executeRequete($sql);


       if ($resultat->rowCount() > 0) {

            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

                $listePaymenttypes[] = new PaymenttypesTable($row);

            }

            return $listePaymenttypes;

        } else {

            return null;
        }


    }

    public function getUnPaymenttype(){

        $sql = "SELECT * FROM paymenttypes WHERE payment = ?";

        $resultat = $this->executeRequete($sql, array($this->parametre['Payment']));

        $unPaymenttype = new PaymenttypesTable($resultat->fetch(PDO::FETCH_ASSOC));

        return $unPaymenttype;
    }

    public function addPaymenttype(){
        $sql = "SELECT MAX(payment) AS idmax FROM paymenttypes" ;
        $result = $this->executeRequete($sql);
        $id = $result->fetch(PDO::FETCH_ASSOC);
        $lastid = $id["idmax"]+1;
        $sql2 ="INSERT INTO paymenttypes (Payment,Description) VALUES (?,?)";
         $this->executeRequete($sql2,array($lastid,$this->parametre['Description']));

    }

     public function delPaymenttype(){
        $sql = 'DELETE FROM paymenttypes WHERE Payment=? ';
         $this->executeRequete($sql, array($this->parametre['Payment']));
    }

    public function updatePaymenttype(){
        $sql = "UPDATE paymenttypes SET Description = ? WHERE payment = ?";
        $id = $this->parametre['Payment'];
        $description = $this->parametre['Description'];      
       $this->executeRequete($sql,array($id,$description));
    }


}
