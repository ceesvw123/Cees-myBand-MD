<?php

$nr_items_page = ITEMS_PAGE_NEWS_DAMIEN_NEWS;
$offset = ($page_nr-1)*$nr_items_page;

$sql = "SELECT * FROM newsarticles ORDER by id ASC LIMIT ".$offset. " ," .$nr_items_page;
$data1 = $mysqli->query($sql);