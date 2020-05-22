<?php
include "get-fav.php";
function testURLs()
{
  $testURLs = array(
  'http://aws.amazon.com',
  'http://www.apple.com',
  'http://www.dribbble.com',
  'http://www.github.com',
  'http://www.intercom.com',
  'http://www.indiehackers.com',
  'http://www.medium.com',
  'http://www.mailchimp.com',
  'http://www.netflix.com',
  'http://www.producthunt.com',
  'http://www.reddit.com',
  'http://www.slack.com',
  'http://www.soundcloud.com',
  'http://www.stackoverflow.com',
  'http://www.techcrunch.com',
  'http://www.trello.com',
  'http://www.vimeo.com',
  'https://www.whatsapp.com/',
  'https://www.gaffling.com/',
  foreach ($testURLs as $url) {
    $grap_favicon = array(
      'URL' => $url,   // URL of the Page we like to get the Favicon from
      'SAVE'=> true,   // Save Favicon copy local (true) or return only favicon url (false)
      'DIR' => './',   // Local Dir the copy of the Favicon should be saved
      'TRY' => true,   // Try to get the Favicon frome the page (true) or only use the APIs (false)
      'DEV' => null,   // Give all Debug-Messages ('debug') or only make the work (null)
    );
    $favicons[] = grap_favicon($grap_favicon);
  }
  foreach ($favicons as $favicon) {
    echo '<img title="'.$favicon.'" style="width:32px;padding-right:32px;" src="'.$favicon.'">';
  }
  echo '<br><br><tt>Runtime: '.round((microtime(true)-$_SERVER["REQUEST_TIME_FLOAT"]),2).' Sec.';
}

testURLs();

include "get-fav.php";
$url = 'https://www.lemonde.fr';

$grap_favicon = array(
  'URL' => $url,   // URL of the Page we like to get the Favicon from
  'SAVE'=> true,   // Save Favicon copy local (true) or return only favicon url (false)
  'DIR' => './icons',   // Local Dir the copy of the Favicon should be saved
  'TRY' => true,   // Try to get the Favicon frome the page (true) or only use the APIs (false)
  'DEV' => null,   // Give all Debug-Messages ('debug') or only make the work (null)
);

echo '<img src="'.grap_favicon($grap_favicon).'">';
?>