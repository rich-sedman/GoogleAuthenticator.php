<?php
include_once("lib/GoogleAuthenticator.php");

$g = new GoogleAuthenticator();

//$secret = 'XVQ2UIGO75XRUKJO';
$secret = 'DBIPNRB4UBNXVMTJ';

printf("The current 'secret' is %s\n", $secret);

print "The QR Code for this secret (to scan with the Google Authenticator App: \n";
print $g->getURL('demo','portal.didos.co.uk',$secret);
print "\n";

$code = readLine("Code: ");

print "Current Code is: ";
print $g->getCode($secret);

print "\n";

print "Check if $code is valid: ";

if ($g->checkCode($secret,$code)) {
    print "YES \n";   
} else {
    print "NO \n";
}


