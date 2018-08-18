<html>
<head>
<title>phpsave</title>
</head>

<body>
<?php
print $_POST["name"];
    $fh = fopen('./a.txt',a);
    fwrite($fh,"ABCD"."\r\n");
    fclose($fh);
?>
</body>
</html>