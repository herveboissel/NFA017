<h3> Noms</h3>

<?php
// La fonction array permet de créer un array
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
//pour tout afficher on fait une boucle foreach
foreach($prenoms as $element)
{
    echo $element . '<br/>';
}

?>
 
<h3> Coordonnées</h3>

<?php
// la fonction array(tableau en Anglais) permet de créer un array
$coordonnees = array (
    'prenom' => 'François', 
    'nom' => 'Durand',
    'adresse' => '5 rue des pinsons',
    'ville' => 'Bordeaux');
foreach ($coordonnees as $cle => $element)
{
    echo '[' . $cle . '] vaut ' . $element . '<br />';
    
}if (array_key_exists('nom', $coordonnees))
{
    echo 'La clé "nom" se trouve dans les coordonnées !';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'La clé "pays" se trouve dans les coordonnées !';
}

?>

<h3> les fruits</h3>




    <?php
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';

$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position;

?>

