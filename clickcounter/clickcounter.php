<?php

$filename = '/tmp/counter.txt';

if (file_exists($filename))
{
    $fHandle = fopen($filename, r);
    $c = fread($fHandle, filesize($filename));
    $c += 1;
    # echo $c;
    fclose($filename);
    $fHandle = fopen($filename);
    fwrite($fHandle, $c);
    fclose($fHandle);
}
else
{
    $fHandle = fopen($filename, w);
    fwrite($fHandle, 1);
    fclose($fHandle);
}
