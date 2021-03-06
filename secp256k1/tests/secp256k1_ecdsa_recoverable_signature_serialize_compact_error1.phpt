--TEST--
secp256k1_ecdsa_recoverable_signature_serialize_compact returns false if parameter parsing fails
--SKIPIF--
<?php
if (!extension_loaded("secp256k1")) print "skip extension not loaded";
?>
--FILE--
<?php

set_error_handler(function($code, $str) { echo $str . PHP_EOL; });

$result = secp256k1_ecdsa_recoverable_signature_serialize_compact();
echo ($result ? "true" : "false") . PHP_EOL;
?>
--EXPECT--
secp256k1_ecdsa_recoverable_signature_serialize_compact() expects exactly 4 parameters, 0 given
false