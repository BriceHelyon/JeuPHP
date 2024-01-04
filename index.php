<?php

include "Character.php";
include "Human.php";
include "Elf.php";
include "Dwarf.php";
include "Hobbit.php";
include "Warrior.php";
include "Magician.php";
include "Thief.php";
include "DwarfWarriorThief.php";

//Création des personnages
$human = new Human("Luke", 100, 0, 0, 10);
$elf = new Elf("Grogu", 120, 10, 10);
$dwarf = new DwarfWarriorThief("Jawa", 150, 20, 20, 20, 80);
$hobbit = new Hobbit("Greedo", 80, 30, 30, 20);

//Affichage des informations de l'humain
echo "Nom: ".$human->getName()."<br>";
echo "Vie: ".$human->getHealth()."<br>";
echo "Position: (".$human->getPosition()['positionX'].",".$human->getPosition()['positionY'].")<br>";
echo "Vitesse: ".$human->getSpeed()."<br>";
echo "Pièces de monnaie: ".$human->getCoins()."<br>";
echo $human->getName()." dit: ".$human->talk()."<br>";

echo "<br>";

//Affichage des informations de l'elfe
echo "Nom: ".$elf->getName()."<br>";
echo "Vie: ".$elf->getHealth()."<br>";
echo "Position: (".$elf->getPosition()['positionX'].",".$elf->getPosition()['positionY'].")<br>";
echo "Vitesse: ".$elf->getSpeed()."<br>";
echo "Pièces de monnaie: ".$elf->getCoins()."<br>";
echo  $elf->getName()." dit: ".$elf->talk()."<br>";

echo "<br>";

//Affichage des informations du nain
echo "Nom: ".$dwarf->getName()."<br>";
echo "Vie: ".$dwarf->getHealth()."<br>";
echo "Position: (".$dwarf->getPosition()['positionX'].",".$dwarf->getPosition()['positionY'].")<br>";
echo "Vitesse: ".$dwarf->getSpeed()."<br>";
echo "Pièces de monnaie: ".$dwarf->getCoins()."<br>";
echo "Force: ".$dwarf->getStrength()."<br>";
echo "Dextérité: ".$dwarf->getDexterity()."<br>";
echo $dwarf->getName(). " dit: ".$dwarf->talk()."<br>";

echo "<br>";

//Affichage des informations de l'hobbit
echo "Nom: ".$hobbit->getName()."<br>";
echo "Vie: ".$hobbit->getHealth()."<br>";
echo "Position: (".$hobbit->getPosition()['positionX'].",".$hobbit->getPosition()['positionY'].")<br>";
echo "Vitesse: ".$hobbit->getSpeed()."<br>";
echo "Pièces de monnaie: ".$hobbit->getCoins()."<br>";
echo $hobbit->getName(). " dit : ".$hobbit->talk()."<br>";

echo "<br>";

//Interaction entre les personnages

//Le nain attaque l'hobbit
$dwarf->attack($hobbit);
echo $dwarf->getName()." attaque ".$hobbit->getName()." et lui inflige ".$dwarf->getstrength()." dégâts <br>";
echo $hobbit->getName()." a maintenant ".$hobbit->getHealth()." PV <br>";

echo "<br>";

//L'hobbit vole le nain
$stolenCoins = $hobbit->steal($dwarf);
if($stolenCoins !== false) {
    echo $hobbit->getName()." vole ".$stolenCoins." pièces de monnaie à ".$dwarf->getName()."<br>";
    echo $dwarf->getName()." a maintenant ".$dwarf->getCoins()." pièces de monnaie <br>";
} else {
    echo $hobbit->getName()." échoue à voler ".$dwarf->getName()."<br>";
}

