<?php

$url = getenv('JAWSDB_MARIA_URL');
$dbparts = parse_url($url);

$driver = 'mysql';
$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');
$charset = 'utf8';

$survey_url = getenv('NEXT_SURVEY_URL');