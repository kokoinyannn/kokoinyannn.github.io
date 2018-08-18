<?php
    $fh = fopen('./a.txt',a);
    fwrite($fh,"ABCD"."\r\n");
    fclose($fh);
?>