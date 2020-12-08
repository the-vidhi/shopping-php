<?php

$path="resume/".$_GET["fname"];
$fname=$_GET["fname"];

header('Content-Description:File Transfer');
header('Content-Type:application/octet-stream');
header('Content-Length:'.Filesize($path));
header('Content-Disposition:attachment;Filename='.$fname);

$fp=fopen($path,"rb");
fpassthru($fp);


?>