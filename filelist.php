<?php

$DIR='\.\/markdown\/';

echo "<hr />";
echo "<h2>File list</h2>";
echo "<ol>";
$file_list = preg_replace("/$DIR(.*?)\.mkd/", '${1}', glob($DIR."*.mkd"));
foreach($file_list as $file){
    echo "<li><a href='./$file'>".ucfirst($file)."</a></li>";
}
echo "</ol>";

?>
