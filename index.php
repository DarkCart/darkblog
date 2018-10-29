<?php
include "bbcode/BBCode.php";
include "bbcode/Tag.php";
include "options.php";
$bbcode = new ChrisKonnertz\BBCode\BBCode();

$postsdir = listdir_by_date("posts/");
foreach ($postsdir as $i) {
    echo "<fieldset>";
    if ($useBBCode) {
        echo $bbcode->render(file_get_contents("posts/".$i));
    } else {
        echo file_get_contents("posts/".$i);
    }
    echo "<br><br>";
    echo date("F d Y H:i", filemtime("posts/".$i)) . " <a href='posts/" . $i . "'>" . "[Permalink]</a></fieldset><br>";
}

// stolen from https://www.jonasjohn.de/snippets/php/listdir-by-date.htm
function listdir_by_date($path){
    $dir = opendir($path);
    $list = array();
    while($file = readdir($dir)){
        if ($file != '.' and $file != '..'){
            // add the filename, to be sure not to
            // overwrite a array key
            $ctime = filectime($path . $file) . ',' . $file;
            $list[$ctime] = $file;
        }
    }
    closedir($dir);
    krsort($list);
    return $list;
}
?>