<?php

ini_set('max_execution_time', 400);

$db = new SQLite3('decrypted.sqlite3');

// $results = $db->query('SELECT npcs.id, npcs.level, npcs.npc_grade_id, localized_texts.en_us, localized_texts.ru, npcs.trader, npcs.honor_point from npcs inner join localized_texts on localized_texts.idx = npcs.id
//     where localized_texts.tbl_name = "npcs" and localized_texts.en_us <> ""');

$results = $db->query('SELECT items.id, localized_texts.idx, localized_texts.en_us, localized_texts.ru, icons.filename, items.level, items.price, items.honor_price from items
 inner join icons on items.icon_id = icons.id 
 inner join localized_texts on items.id = localized_texts.idx
 where localized_texts.tbl_name = "items" and localized_texts.tbl_column_name = ' . "'name'" . ' and localized_texts.en_us <> ""');

$json=array();

while( $row = $results->fetchArray() ) {
    $json[]=$row;
}
$db->close();
$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($json));
fclose($fp);
?>