
<?php

include_once("weather_api.html");

?>
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){ $protocol = "https://".$_SERVER['HTTP_HOST']; } else{ $protocol='http://'.$_SERVER['HTTP_HOST']; }
