<?php
require 'facebook.php';
$access_token="Enter_Access_token_here";
$token = $access_token;
$facebook = new Facebook(array(
'appId' => '645065615510559',
'secret' => '5b7d44a366b89595f9ce80d864ac03d9',
'cookie' => true
));
try {
$parameters['access_token'] = $access_token;
$user = $facebook->api('/me', $parameters);

function user($value)
{
  global $user;
  if($user)
  { return $user[$value];}
}

} catch (FacebookApiException $e) {
  echo "Error in load";
}
?>
