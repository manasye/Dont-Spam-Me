<?php
    $command = $_POST["cmd"];
    var_dump($command);
    $keywords = $_POST["key"];
    var_dump($keywords);
    $tweets = json_decode($_POST["posts"]);
   
    $test = json_encode($tweets);
    $result = exec("E:Installer/xampp/htdocs/algorithm.py $command $keywords $test");
    var_dump($result);
    echo (file_get_contents('result.txt'));

    return 0;
?>