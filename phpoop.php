<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPOOP</title>
</head>
<body>
    <?php

    class Fruit {
        public $name;
        public $color;
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        public function intro() {
            echo " The fruit is {$this->name} and the color is {$this->color}";
        }
    }


    class Strawberry extends Fruit {
        public function message() {
            echo "Am I a fruit or a berry?";
        }
    }
    $strawberry = new Strawberry("Strawberry", "red");
    $strawberry->message();
    $strawberry->intro();

    echo "<br>";


    // parent class
    abstract class Car {
        public $name;
        public function __construct($name) {
            $this->name = $name;
        }
        abstract public function intro() : string;
    }

    class Audi extends Car {
        public function intro() : string {
            return "Choose Germen quality! I'm an $this->name!";
        }
    }

    class Volvo extends Car {
        public function intro() : string {
            return "Proud to be Swedish! I'm a $this->name!";
        }
    }

    class Citroen extends Car {
        public function intro() : string {
            return "French extravagance! I'm a $this->name!";
        }
    }

    $audi = new Audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $volvo = new volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";

    $citroen = new citroen("Citroen");
    echo $citroen->intro();
    ?>
</body>
</html>