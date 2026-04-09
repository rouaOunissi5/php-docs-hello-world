<?php

$my_setting = getenv('MY_CUSTOM_SETTING');
echo "Hello World! 3rd push to enable auto-swap to prod ";
if ($my_setting) {
    echo "Value from Portal: " . $my_setting;
} else {
    echo "Variable not found. Make sure to Save in the Portal!";
}