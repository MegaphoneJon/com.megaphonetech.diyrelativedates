<?php

eval(`cv php:boot`);
$filter = json_encode(array(
  'type' => 'diy',
  'fromBegins' => NULL,
  'fromOffset' => -22,
  'fromUnit' => "day",
));
$result = civicrm_api3('OptionValue', 'create', array(
  'option_group_id' => "relative_date_filters",
  'label' => "22 Days Ago",
  'value' => $filter,
  'weight' => 1,
));
$filter = json_encode(array(
  'type' => 'diy',
  'fromBegins' => NULL,
  'fromOffset' => -38,
  'fromUnit' => "day",
  'toBegins' => NULL,
  'toOffset' => 0,
  'toUnit' => 'day',
));
$result = civicrm_api3('OptionValue', 'create', array(
  'option_group_id' => "relative_date_filters",
  'label' => "38 Days Ago to today",
  'value' => $filter,
  'weight' => 1,
));
$filter = json_encode(array(
  'type' => 'diy',
  'fromBegins' => NULL,
  'fromOffset' => -18,
  'fromUnit' => "day",
  'toBegins' => NULL,
  'toOffset' => 7,
  'toUnit' => 'day',
));
$result = civicrm_api3('OptionValue', 'create', array(
  'option_group_id' => "relative_date_filters",
  'label' => "18 Days Ago to 7 days from now",
  'value' => $filter,
  'weight' => 1,
));
echo "done";
