<?php
  if (isset($_REQUEST['user_answer'])) {
    $user_answer = $_REQUEST['user_answer'];
  }
  if (isset($_REQUEST['pref_name'])) {
    $pref_name = $_REQUEST['pref_name'];
  }
  if (isset($_REQUEST['pol_name'])) {
    $pol_name = $_REQUEST['pol_name'];
  }
  if (isset($_REQUEST['pref_url'])) {
    $pref_url = $_REQUEST['pref_url'];
  }

  if ($user_answer == $pol_name) {
    $result = '正解';
  }else {
    $result = '不正解';
  }

  $title = "結果発表";

  require_once dirname(__FILE__) . '/views/tpl_answer.php';
