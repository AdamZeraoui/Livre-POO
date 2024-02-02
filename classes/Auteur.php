<?php

class Auteur{ //Equivalent Entreprise.

    private string $firstName;
    private string $lastName;
    private array $livres;

    
    public function __construct(string $firstName,string $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->livres=[];

    }
    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
 
    public function getLivres(): array {
        return $this->livres;
    }


    public function setLivres(array $livres): self {
        $this->livres = $livres;
        return $this;
    }

    public function addLivre(Livre $livre){
        $this->livres[] = $livre;
    }

    public function afficherBibliographie(){
        $result = "<h2>Livre de $this :</h2><ul>";
        
        foreach($this->livres as $livre){
            $result.= "<li>$livre</li><br>";
        }
        $result.= "</ul>";
        return $result;
    }

    public function __toString(){
        return $this->firstName." ".$this->lastName;
    }


}