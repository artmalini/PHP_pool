#!/usr/bin/php
<?php
	// if ($argc < 2 || !file_exists($argv[1]))
	// 	exit();
	// $read = fopen($argv[1], 'r');
	// $page = "";
 //    while ($read && !feof($read)) {
 //        $page .= fgets($read);
 //    }
 //    $page = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/si", function($matches) {
 //        $matches[0] = preg_replace_callback("/( title=\")(.*?)(\")/mi", function($matches) {
 //            return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
 //        }, $matches[0]);

 //        $matches[0] = preg_replace_callback("/(>)(.*?)(<)/si", function($matches) {
 //            return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
 //        }, $matches[0]);

 //        return ($matches[0]);
 //    }, $page);
 //    echo $page;

if ($argc > 1) {
    $file = file_get_contents($argv[1]);
    $page = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/si", function($matches) {        
            return ($matches[1]."".strtoupper($matches[2])."".$matches[3].$matches[4].$matches[5]);
        }, $file);
    echo "$page\n";
}    

// function ft_strtoupper_t($m)
// {
//     $t = strstr($m, ">", 1);
//     $t = strtoupper($t);
//     $t = $t . strstr($m, ">");
//     return($t);
// }

// function ft_struper($m)
// {
//     $t = strstr($m, ">");
//     $t = strtoupper($t);
//     $e = strstr($m, ">", 1) . $t;
//     return ($e);
// }
// function upper($match)
// {
//     return strtoupper($match[0]);
// }

// if ($argc > 1)
// {
//     $file = file_get_contents($argv[1]);
//     $fd = explode('title', $file);
//     $i = count($fd) - 1;
//     $f = 0;
//     while ($f <= $i) {
//         if (preg_match("/\s{0,}=/", $fd[$f]) >= 1)
//             {
//                 $fd[$f] = ft_strtoupper_t($fd[$f]);
//             }
//         $f++;
//     }
//     $test = implode('title', $fd);
//     $te = explode('<', $test);
//     $i = count($te);
//     $f = 0;
//     while ($f != $i) {
//         if (strstr($te[$f], "href") != FALSE)
//             $te[$f] = ft_struper($te[$f]);
//         $f++;
//     }
//     $test = implode('<', $te);
//     echo $test;
// }
?>