<?php
//set cookie:
setcookie("key1", "keyone", time() + (86400 * 2), "/", "", false, true);
setcookie("key2", "keytwo", time() + (86400 * 3), "/", "", false, true);

foreach($_COOKIE as $key => $value){
    echo "{$key}={$value} <br>";
}

//remove cookie:
setcookie("key1","",time()-0,"/");

?>