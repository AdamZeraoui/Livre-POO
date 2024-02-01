<?php

class Auteur{

    private string $firstName;
    private string $lastName;
    private array $livres;
    
    public function __construct(string $firstName,string $lastName, array $livres){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->livres = [];
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

    public function __toString(){
        return $this->firstName." ".$this->lastName;
    }

    public function getLivre(): array {
        return $this->livres;
    }

    public function setLivre(array $livres): self {
        $this->livres = $livres;
        return $this;
    }

    public function addLivre(Livre $livre){
        $this->livres[] = $livre;
    }


}