<?php

if (!defined('ABSPATH')) {
    die('-1');
}
console("init");
include('resource/resource_init.php');
include('shorcodes.php');

function console($txt, $key = null){
  echo '
        <script>
            console.log("moein - ' . $key . ' - ' . $txt . '");
        </script>
    ';
}