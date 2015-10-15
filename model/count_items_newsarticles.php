<?php

$sql = "SELECT * FROM newsarticles";
$result = $mysqli->query($sql);

$total_items = $result->num_rows;

$total_pages = ceil($total_items/ITEMS_PAGE_NEWS);

