<?php
session_start();
require ('config/config_select.php');

if (parse_url($survey_url, PHP_URL_QUERY))
  header("Location: $survey_url&pcode=".$_SESSION['participant_code']);
else
  header("Location: $survey_url?pcode=".$_SESSION['participant_code']);

session_destroy();