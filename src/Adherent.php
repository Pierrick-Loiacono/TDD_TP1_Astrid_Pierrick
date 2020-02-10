<?php
declare(strict_types=1);

final class Adherent
{
    private $nom;
    private $prenom;
    private $date_naissance;


    public function __construct(string $nom, string $prenom,
                                DateTime $date_naissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
    }

    public function getNom(){
        return strtoupper($this->nom);
    }
    public function getPrenom(){
        return strtoupper($this->prenom);
    }
    public function getDateNaissance(){
        return $this->date_naissance->format('dmY');
    }

    public function getAllConcat(): string {
        $concat = $this->nom . $this->prenom . $this->date_naissance->format('dmY');
        return strtoupper($concat);
    }


}