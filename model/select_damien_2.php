<?php

$nr_items_page = ITEMS_PAGE_NEWS_DAMIEN_IMAGES;
$offset = ($page_nr-1)*$nr_items_page;

$sql = "SELECT * FROM pics ORDER by id ASC LIMIT ".$offset. " ," .$nr_items_page;
$data2 = $mysqli->query($sql);