<?php
// Appel d'une fonction PHP
// qui affiche la configuration de Apache
//phpinfo();
echo "Coucou !";
// Déclaration de variables
$mavariable = 5;
$nombre = 2.456e-6;
$texte = " Licence ATC ";
// Afficher des variables
echo "<h1>Mon premier script !</h1>";
echo "Un nombre entier : ".$mavariable."<br>";
echo "Un nombre réel : ".$nombre."<br>";
echo $texte."<br>";
// Tableau associatif
$tab=array("Leslie"=>"Barat","Vincent"=>"Boutelet","Nicolas"=>"Broquet");
foreach($tab as $indice => $valeur)
{
  echo $indice." : ".$valeur."<br/>";  
}
// Tableau à indice numérique
for($i=0; $i<10; $i++)
{
    $tab[$i]=mt_rand(0,10);
    //echo ("Case ".$i." : ".$tab[$i]."<br>");
}
// Boucle d'affichage tableau numérique
for($i=0; $i<10; $i++)
{
    echo ("Case ".$i." : ".$tab[$i]);
}
echo "<br/>";

//Boucle while
$i=0;
while ($i<count($tab))
{
    if($i<(count($tab)-1))
    {
        echo $tab[$i]."-";
    }
    else echo $tab[$i];
    $i++;
}

//var_dump($tableau);
?>