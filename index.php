<?php

require './vendor/autoload.php';

echo "Este é a Home";
echo "<br>";
echo $_SERVER['REQUEST_URI'];
echo "<br>";
print_r($_GET);