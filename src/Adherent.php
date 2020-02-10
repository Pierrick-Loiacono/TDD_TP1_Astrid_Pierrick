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

    function replaceAccents($str) {
        $translit = array('Á'=>'A','À'=>'A','Â'=>'A','Ä'=>'A','Ã'=>'A','Å'=>'A','Ç'=>'C','É'=>'E','È'=>'E','Ê'=>'E','Ë'=>'E','Í'=>'I','Ï'=>'I','Î'=>'I','Ì'=>'I','Ñ'=>'N','Ó'=>'O','Ò'=>'O','Ô'=>'O','Ö'=>'O','Õ'=>'O','Ú'=>'U','Ù'=>'U','Û'=>'U','Ü'=>'U','Ý'=>'Y','á'=>'a','à'=>'a','â'=>'a','ä'=>'a','ã'=>'a','å'=>'a','ç'=>'c','é'=>'e','è'=>'e','ê'=>'e','ë'=>'e','í'=>'i','ì'=>'i','î'=>'i','ï'=>'i','ñ'=>'n','ó'=>'o','ò'=>'o','ô'=>'o','ö'=>'o','õ'=>'o','ú'=>'u','ù'=>'u','û'=>'u','ü'=>'u','ý'=>'y','ÿ'=>'y');
        $str = strtr($str, $translit);
        return preg_replace('#[^a-zA-Z0-9\-\._]#', '_', $str); // Pour des noms de fichiers par exemple
    }


}