<?php
$test = "test";
foreach($_GET as $key=>$value){
	$$key=$value;
}
echo "\$test=".$test;