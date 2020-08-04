<?php
use Doctrine\ORM\Annotation as ORM;

/** 
 * @Entity @Table(name="client_non_salarie")
 **/
class Client_non_salarie
{
    /** @Id @column(type ="integer")  @generateValue **/
    private $id;
    /** @column(type ="string") **/
    private $nom;
    /** @column(type ="string") **/
    private $prenom;
    /** @column(type ="string") **/
    private $activite; 
    /** @column(type ="int") **/
    private $numero_CNI;
    /** @column(type ="int") **/
    private $id_client;

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
    public function getNom()
    {
    return $this->nom;
    }
    public function setNom($nom)
    {
     $this->nom= $nom;
    }
    public function getPrenom()
    {
    return $this->prenom;
    }
    public function setPrenom($prenom)
    {
     $this->prenom= $prenom;
    }
    public function getActivite()
    {
    return $this->activite;
    }
    public function setActivite($activite)
    {
     $this->activite= $activite;
    }
    public function getNumero_CNI()
    {
    return $this->numero_CNI;
    }
    public function setNumero_CNI($numero_CNI)
    {
     $this->numero_CNI= $numero_CNI;
    }
    public function getId_client()
    {
    return $this->id_client;
    }
    public function setId_client($id_client)
    {
     $this->id_client= $id_client;
    }
}
?>










