<?php
include "get-fav.php";
$url = array_key_exists('url', $_GET)?$_GET['url'] : "http://www.lemonde.fr";
$debug = array_key_exists('debug', $_GET)?'debug' : null;

$grap_favicon = array(
'URL' => $url,   // URL of the Page we like to get the Favicon from
'SAVE'=> false,   // Save Favicon copy local (true) or return only favicon url (false)
'DIR' => './icons',   // Local Dir the copy of the Favicon should be saved
'TRY' => true,   // Try to get the Favicon frome the page (true) or only use the APIs (false)
'DEV' => $debug   // Give all Debug-Messages ('debug') or only make the work (null)
);
echo grap_favicon($grap_favicon);
?>