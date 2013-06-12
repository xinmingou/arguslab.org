<?php
  /* This file is needed to pull in the news RSS feed
   * We have to pull it down from our server to not violate
   * the Same-Origin Policy 
   */
  header('Content-type: application/xml');
  echo file_get_contents("http://feeds.pheedo.com/techtarget/Searchsecurity/SecurityWire");
?>
