<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_016</title>
 </head>
 
 <body>
  <p>
    <?php
    // Foodクラス定義
    class Food {
      // プロパティ定義
      public $name;
      public $price;

      //  メソッド定義
      public function show_price(){
        echo $this->price . '<br>';
      }

      // コンストラクタ定義
      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }
    }

    // Animalクラス定義
    class Animal {
      // プロパティ定義
      public $name;
      public $height;
      public $weight;
      
    // メソッド定義
    public function show_height(){
      echo $this->height. '<br>';
      }

      // コンストラクタ定義
      public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
  }

  // インスタンス化
  $potato = new Food("potato",250);
  print_r($potato);
  echo '<br>';

  $dog = new Animal("dog",60,2500);
  print_r($dog);
  echo '<br>';

  $potato->show_price();
  $dog->show_height();

    ?>
  </p>
 </body>