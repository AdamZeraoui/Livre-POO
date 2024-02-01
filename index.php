<h1>Exercice POO</h1>

<?php

spl_autoload_register(function($class){ //permet d'indiquer le chemin des classes utiliser.
    require 'classes/'.$class.'.php';
});

$steph = new Auteur("Stephen","King");
$livre1 = new Livre("Ca","1986",1138,20, $steph);
$livre2 = new Livre("Simetierre","1983",374,15,$steph);
$livre3 = new Livre("Le Fléau","1978",823,14,$steph);
$livre4 = new Livre("Shining","1977",447,16,$steph);


echo 'Livre de '.$steph->__toString().'<br><br>';
echo $livre->__toString();

var_dump($steph);