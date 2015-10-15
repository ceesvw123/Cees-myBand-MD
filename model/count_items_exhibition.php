<?php

$sql = "SELECT * FROM exhibitions";
$result = $mysqli->query($sql);

$total_items = $result->num_rows;

$total_pages = ceil($total_items/ITEMS_PAGE_EXHIBITION);

