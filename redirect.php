<?php
session_start();
require ('config/config_select.php');

if (parse_url($survey_url, PHP_URL_QUERY))
  header("Location: $survey_url&pcode=".$_SESSION['participant_code']."&condition=".$_SESSION['assigned_condition']);
else
  header("Location: $survey_url?pcode=".$_SESSION['participant_code']."&condition=".$_SESSION['assigned_condition']);

unset($_SESSION['assigned_condition']);
unset($_SESSION['participant_code']);