<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎16章課題</title>
</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
        print_r($this);
        echo "<br>";
      }

      public function show_price() {
        echo "{$this->price}<br>";
      }
    }
    class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        print_r($this);
        echo "<br>";
      }

      public function show_height() {
        echo "{$this->height}<br>";
      }
    }

    $food = new Food("potato", 250);
    $animal = new Animal("dog", 60, 5000);
    $food->show_price();
    $animal->show_height();
    ?>
  </p>
</body>

</html>
