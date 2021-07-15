<?php
// Combines RSS feeds from multiple sources
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');

$base_url = 'https://student-activity.binus.ac.id/himti';

if ($_GET['postType'] == 'gallery') $base_url .= '/gallery';
else if (strlen($_GET['category']) > 0) $base_url .= '/category/' . $category;

$feed = implode(file($base_url . '/feed'));
$xml = simplexml_load_string($feed);
echo json_encode($xml);
