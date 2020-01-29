<?php
declare(strict_types=1);

final class Adherent
{
    private $nom;
    private $prenom;
    private $date_naissance;


    public function __construct($nom, $prenom, $date_naissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
    }

    public function getNom(){
        return strtoupper($this->nom);
    }


}