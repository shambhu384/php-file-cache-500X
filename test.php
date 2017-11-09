<?php

require 'lib.php';

$data = array_fill(0, 1024 * 1024, 'hi'); // your application data here
cache_set('my_key', $data);
apc_store('my_key', $data);


$t = microtime(true);
$data = cache_get('my_key');
echo microtime(true) - $t;
