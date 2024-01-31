<?php

class Livre{

    private string $title;
    private DateTime $year;
    private int $pages;
    private float $price;
    private Auteur $auteur;

    public function __construct($title,$year,$pages,$price){
        
        $this->title = $title;
        $this->year = new DateTime($year); //ne pas oublier de déclarer le ew DateTime dans le construct ! 
        $this->pages = $pages;
        $this->price = $price;
    }
        
    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getYear(){
        return $this->year;
    }

    public function setYear(string $year){
        $this->year = new DateTime($year);
    }

    public function getPages(){
        return $this->pages;
    }

    public function setPages($pages){
        $this->pages = $pages;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function __toString(){
        return $this->getTitle().' '.$this->year->format('Y').' :'.$this->getPages().' pages/'.$this->getPrice().'€';
    }

}