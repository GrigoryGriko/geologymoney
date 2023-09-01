<?php
$db->Query("SELECT * FROM `games_schulte_tab` WHERE `id` = 7");
$NumRows = $db->NumRows();
if ( !empty($NumRows) ) {
    $as_games_data_2 = $db->FetchAssoc();
}
$time_user_1 = strtotime($as_games_data_2['date_user_1_end']) - strtotime($as_games_data_2['date_user_1_start']) + $as_games_data_2['penalty_time_seconds_user_1'];
$time_user_2 = strtotime($as_games_data_2['date_user_2_end']) - strtotime($as_games_data_2['date_user_2_start']) + $as_games_data_2['penalty_time_seconds_user_2'];

echo $time_user_1.'-'.$time_user_2;
?>