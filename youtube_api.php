<?php
    require_once 'check_Session.php';

    header("Content-Type: application/json");
    
    $apiKey = "";
    $channelID = "UCE_M8A5yxnLfW0KghEeajjw";
    $uploadsID = "UUE_M8A5yxnLfW0KghEeajjw";
    $url = "https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=10&playlistId=UUE_M8A5yxnLfW0KghEeajjw&key=$apiKey";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
?>
