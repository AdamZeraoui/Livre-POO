<h1>Exercice POO</h1>

<?php


$steph = new Auteur('Stephen','King');
$ca = new Livre('Ca',1986,1138,20,$steph);
$simetierre = new Livre("Simetierre",1983,374,15,$steph);
$leFleau = new Livre ("Le Fléau",1978,823,14,$steph);
$shining = new Livre ("Shining",1977,477,16,$steph);

echo $steph->afficherBibliographie();