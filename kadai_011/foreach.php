<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UFT-8">
        <title>kadai_011</title>
    <head>

    <body>
        <p>
            <?php
            $data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
            
            foreach ($data as $key => $value){
                echo "{$key}:{$value}<br>";
            }
            ?>
        </p>
        </body>
</html>
