<?php
//affichage des donnees saisies dans le formualaire
echo "Verification des donnees saisies<br />";
foreach($_POST as $indice => $valeur){
    echo $indice." : ".$valeur."<br />";
}
$taille=$_POST["taille"];
$valeur=$_POST["valeur"];
// tableau à indice numérique
// de taille variable
for ($i=0;$i<10;$i++){
    $tab[$i]=mt_rand(0,10);
}
$i=0;
while ($i<count($tab))
{
    if($i<(count($tab)-1))
    {
        echo $tab[$i]." - ";
    }
    else echo $tab[$i];
    $i++;
}
echo "<br/>";
$i=0;
$compteur=0;
while ($i<count($tab))
{
    if($tab[$i]==$valeur)
    {
        $compteur++;
    }
    $i++;
}
if($compteur!=0) echo "Il y a ".$compteur." fois la valeur ".$valeur." dans le tableau";
else echo "Ta valeur n'est pas dans le tableau";
?>