<?php

// Azure often puts these in $_SERVER
$my_setting = getenv('MY_CUSTOM_SETTING') ?: ($_SERVER['MY_CUSTOM_SETTING'] ?? $_ENV['MY_CUSTOM_SETTING'] ?? null);

echo "<h1>Hello World!</h1>";


if ($my_setting) {
    echo "<strong>Value found:</strong> " . $my_setting;
} else {
    echo "<strong>Variable not found.</strong> Check if you saved it on the STAGING slot specifically.";
}