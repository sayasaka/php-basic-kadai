<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
    <p>
            <?php

           

            //　クラスを定義(Food)
            class Food {
                // プロパティを定義
                private $name;
                private $price;


                public function __construct(string $name, int $price) {
                    $this->name = $name;
                    $this->price = $price;
                }

                public function show_price(){
                    return $this->price;
                }
            }

                $food = new Food('potato', 250);

                print_r($food);
                echo '<br>';
        
            
            
            // クラスを定義（Animal）
            class Animal {
                // プロパティ
                private $name;
                private $height;
                private $weight;

                public function __construct(string $name, int $height, int $weight) {
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }

                public function show_height(){
                    return $this->height;
                }
            }

                $animal = new Animal('dog', 60, 5000);

                print_r($animal);
                echo '<br>';

                echo $food->show_price();
                echo '<br>';
                echo $animal->show_height();


            
            
            
            



            ?>
            
        </p>
        </body>
    </html>