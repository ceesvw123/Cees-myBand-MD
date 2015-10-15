<?php

$searchText = isset($_POST['searchText']) ? $_POST['searchText'] : 'HOIHOIHOI';

if($searchText == ""){
    $searchText = "HOIHOIHOI";
}

$q = "SELECT * FROM newsarticles WHERE (title LIKE '%$searchText%' OR content LIKE '%$searchText%' or date_created LIKE '%$searchText%')";
//$q = "SELECT * FROM exhibitions WHERE (title LIKE '%$searchText%' OR location LIKE '%$searchText%' or dates LIKE '%$searchText%'or website LIKE '%$searchText%')";
$searchResult = $mysqli->query($q);
if($searchResult->num_rows >= 2){
    echo "<h2>".$searchResult->num_rows." Results</h2>";
}elseif($searchResult->num_rows == 1){
    echo "<h2>".$searchResult->num_rows." Result</h2>";
}
else{
    echo "<h2>No result</h2>";
}
echo "<hr class='style5'>";
