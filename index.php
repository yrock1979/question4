<?php
    // 配列の中身をカウントして中身を一覧表示する
    $array = ['笹野', '赤い笹野', '青い笹野', '黒い笹野', '黄色い笹野'];
    
    $count = count($array);
    
    echo $count . '<br>';

    for ($i=0; $i < $count; $i++) {
        echo $array[$i] . '<br>';
    }