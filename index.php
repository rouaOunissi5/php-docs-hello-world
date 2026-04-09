<?php

// Azure often puts these in $_SERVER
$my_setting = getenv('MY_CUSTOM_SETTING') ;

echo "<h1>Hello World!</h1>";

echo  $my_setting; 
