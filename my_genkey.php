<?php
include_once("lib/GoogleAuthenticator.php");

$g = new GoogleAuthenticator();

$secret = $g->generateSecret();
print "Get a new Secret: $secret \n";

