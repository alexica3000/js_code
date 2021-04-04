<?php

//For Laravel 5.8 use this solution in blade.php where you generate links:

$links = $data->links();
$patterns = '#\?page=#';

$replacements = '/page/';
$one = preg_replace($patterns, $replacements, $links);

$pattern2 = '#page/([1-9]+[0-9]*)/page/([1-9]+[0-9]*)#';
$replacements2 = 'page/$2';
$paginate_links = preg_replace($pattern2, $replacements2, $one);
echo $paginate_links;
