<?php

require('simple_html_dom.php');

// Create DOM from URL or file
$html = file_get_html('http://www.primewire.ag/watch-2805774-Star-Wars-The-Last-Jedi-online-free');


// Find All Movie Links
$linkPrefix = 'http://primewire.ag';
$linkClass;
foreach($html->find(".movie_version_link") as $linkClass)  {
    echo "Link: ",$linkPrefix,$linkClass->find('a',0)->href,"<br/>\n";

}
?>
