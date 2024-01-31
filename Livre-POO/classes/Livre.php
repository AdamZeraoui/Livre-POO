<?php

class Livre{

    private string $title;
    private DateTime $year;
    private int $page;
    private float $price;

    public function __construct($title,$year,$page,$price){
        
        $this->title = $title;
        $this->$year = $year;
        $this->page = $page;
        $this->price = $price;
    }
        
}