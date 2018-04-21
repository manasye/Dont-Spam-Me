<?php
    $command = $_POST["cmd"];
    $keywords = $_POST["key"];
    $posts = $_POST["posts"]
    $python = 'python algorithm.py ' . $command . ' ' . $keywords . ' ' . 
    ' ' . $posts . 'E:\Installer\xampp\htdocs';
    $result = exec($python);
    echo $result;
?>