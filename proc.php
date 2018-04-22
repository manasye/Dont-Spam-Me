<?php
    $command = $_POST["cmd"];
    var_dump($command);
    $keywords = $_POST["key"];
    var_dump($keywords);
    $posts = $_POST["posts"];

    $fp = fopen('post.json', 'w');
    fwrite($fp, json_encode($posts));
    fclose($fp);

    // $python = python algorithm.py ' . $command . ' ' . $keywords . ' ' . ' ' . $posts . 'E:\Installer\xampp\htdocs';
    $result = exec('python algorithm.py '.$command.' '.$keywords );
    echo $result;
?>