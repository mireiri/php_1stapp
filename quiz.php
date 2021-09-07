<?php
  $text_lines = file('prefectures.txt', FILE_IGNORE_NEW_LINES);

  foreach ($text_lines as $i) {
      $array = explode(',', $i);
      $prefecture = $array[0];
      $pol = $array[1];
      $url = $array[2];

      $prefecture_pol[$prefecture] = $pol;
      $prefecture_url[$prefecture] = $url;
  }

  $pref_name = array_keys($prefecture_pol);
  $pref_name_key = array_rand($pref_name);
  $pref_name = $pref_name[$pref_name_key];

  $pol_name = $prefecture_pol[$pref_name];
  $pref_url = $prefecture_url[$pref_name];

  $title = "県庁所在地はな～んだ？";

  require_once dirname(__FILE__) . '/views/tpl_quiz.php';
