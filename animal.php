<?php
class Animal
{
    protected string $_nom;
    protected int $_age;
    protected $_type;

    public function faireDuBruit()
    {
        return "L'animal fait du bruit.";
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getAge()
    {
        return $this->_age;
    }

    public function getType()
    {
        return $this->_type;
    }

    public function setNom(string $nom)
    {
        $this->_nom = $nom;
    }

    public function setAge(int $age)
    {
        if ($age > 0) {
            $this->_age = $age;
        } else {
            echo "Le valeur $age ne peut pas être utilisée pour définir l'age de l'animal. On vous donne 0 à la place.";
            $this->_age = 0;
        }
    }

    public function setType($type)
    {
        $lType = array("oiseau", "mammifere", "reptile");

        if (in_array($type, $lType)) {
            $this->_type = $type;

        } else {
            echo "Le type $type n'est pas reconnu. On vous donne mammifere à la place.";
            $this->_type = "mammifere";
        }
    }

    public function __toString()
    {
        return "Nom: " . $this->_nom . "\nAge: " . $this->_age . "\nType: " . $this->_type . "\n";
    }
}
$animal1 = new Animal();
$animal1->setAge(24);
$animal1->setNom("Francis");
$animal1->setType("Grenouille");
echo $animal1;


$animal2 = new Animal();
$animal2->setAge(-24);
$animal2->setNom("Michel");
$animal2->setType("reptile");
echo $animal2;


class Mammifere extends Animal
{
    private $_bipede;

    public function faireDuBruit()
    {
        return "Le mammifère rugit.\n";
    }
    public function getBipede()
    {
        if (!empty($_bipede)) {
            return $this->_bipede;

        }
        return false;
    }
    public function setBipede(bool $bipede)
    {
        $this->_bipede = $bipede;
    }
    public function doFlip()
    {
        if (!empty($this->_nom)) {
            echo $this->_nom . " fait un backflip";

        } else {
            echo "Le mammifere fait un frontflip";
        }
    }
    function __toString()
    {
        return "Nom: " . $this->_nom . "\nAge: " . $this->_age . "\nType: " . $this->_type . "\nBipede?: " . $this->_bipede . "\n";
    }

}
class Oiseau extends Animal
{
    private $_plumage;

    public function faireDuBruit()
    {
        return "L'oiseau gazouille.\n";
    }

    public function setPlumage(string $plumage)
    {
        $this->_plumage = $plumage;
    }
    public function getPlumage()
    {
        if (!empty($this->_plumage)) {
            return $this->_plumage;

        } else {
            return "brown";
        }
    }
    public function voler()
    {
        if (!empty($this->_nom)) {
            echo $this->_nom . " s'envole !";

        } else {
            echo "L'oiseau s'envole\n";
        }
    }

    function __toString()
    {
        return "Nom: " . $this->_nom . "\nAge: " . $this->_age . "\nType: " . $this->_type . "\nPlumage: " . $this->_plumage . "\n";
    }
}
class Reptile extends Animal
{
    private $_legs;

    public function faireDuBruit()
    {
        return "Le reptile siffle.\n";
    }

    public function getLegs()
    {
        if (!empty($_legs)) {
            return $this->_legs;

        }
        return "Le nombre de jambes n'a pas ete renseigne";
    }
    public function setLegs(int $legs)
    {
        if (!$legs < 0) {
            $this->_legs = $legs;

        } else {
            "Entrez un nombre de jambes au moins egal à 0";
        }
    }
    public function serpente()
    {
        if (!empty($this->_nom)) {
            echo $this->_nom . " serpente";

        } else {
            echo "Le reptile serpente\n";
        }
    }
    function __toString()
    {
        return "Nom: " . $this->_nom . "\nAge: " . $this->_age . "\nType: " . $this->_type . "\nJambes: " . $this->_legs . "\n";
    }
}
$bird1 = new Oiseau();
$bird1->setAge(22);
$bird1->setNom("Lucien");
$bird1->setPlumage("Red");
$bird1->setType("oiseau");
echo $bird1;


$animal3 = new Animal();
echo $animal3->faireDuBruit();

$oiseau1 = new Oiseau();
echo $oiseau1->faireDuBruit();

$mammifere1 = new Mammifere();
echo $mammifere1->faireDuBruit();
?>