
<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"email:");
    fwrite($file, $email ."\n");
    fclose($file);
    header("location: success.html");
 ?>


