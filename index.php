<?php
include 'config.php';
try {
  $poke=$facebook->api("/me/pokes","GET",$parameters);
  $id = $poke['data'];
} catch (Exception $e) {
  echo $e;
}


foreach ($id as $rual) {
 $uid = $rual['from']['id'];
 try {
   $pokeBack=$facebook->api("/".$uid."/pokes","POST",$parameters);
   $pokeBack;
 }
 catch (Exception $e) {
   echo $e;
 }
}
?>
