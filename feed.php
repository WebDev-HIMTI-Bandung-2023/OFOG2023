<?php
// Combines RSS feeds from multiple sources
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');

$url = 'https://student-activity.binus.ac.id/himti/feed';

$feed = implode(file($url));
$xml = simplexml_load_string($feed);
echo json_encode($xml);
