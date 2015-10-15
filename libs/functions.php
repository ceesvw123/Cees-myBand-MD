<?php
/**
 * Created by PhpStorm.
 * User: ceesvanwanrooy
 * Date: 09-10-15
 * Time: 12:15
 */

function resultToArray($db_result){
    $rowlist = array();

    while($row = $db_result->fetch_assoc()){
        $rowlist[] = $row;
    }

    return $rowlist;
}