<?php

require 'config.php';

$rUrl = "https://softorder.herokuapp.com/fb-callback.php";

$permissions = ['email',id','name','birthday','email','gender','age_range'];

$loginUrl = $helper->getLoginUrl($rUrl, $permissions);
echo $loginUrl;

?>
<!doctype html land="en">

<input type="button" onclick="window.location = '<?php echo $loginUrl; ?>'" value='Login With Facebooj'>
