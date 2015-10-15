<?php

$nr_items_page = ITEMS_PAGE_NEWS_DAMIEN_AGENDA;
$offset = ($page_nr-1)*$nr_items_page;

$sql = "SELECT * FROM exhibitions ORDER by id ASC LIMIT ".$offset. " ," .$nr_items_page;
$data3 = $mysqli->query($sql);