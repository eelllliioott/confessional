<?php
 $path = 'data.txt';
 if (isset($_POST['field1'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['field1'].' <br> '.$_POST['field2'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>

<meta http-equiv="refresh" content="0; URL='index.html'" />