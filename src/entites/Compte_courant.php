<?php
use Doctrine\ORM\Annotation as ORM;

/** 
 * @Entity @Table(name="compte_courant")
 **/
class Compte_courant
{
    /** @Id @column(type ="integer")  @generateValue **/
    private $id;
    /** @column(type ="int") **/
    private $agios;
    /** @column(type ="int") **/
    private $Id_compte;

    public function __construct()
    {
        
    }

    public function getId()
    {
    return $this->id;
    }
    public function setId($id)
    {
     $this->id= $id;
    }
    public function getAgios()
    {
    return $this->agios;
    }
    public function setAgios($agios)
    {
     $this->agios= $agios;
    }
    public function getId_compte()
    {
    return $this->Id_compte;
    }
    public function setId_compte($Id_compte)
    {
     $this->Id_compte= $Id_compte;
    }

}

?>



















