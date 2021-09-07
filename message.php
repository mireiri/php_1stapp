<?php
  $word_lines = file('messages.txt', FILE_IGNORE_NEW_LINES);

  foreach ($word_lines as $i) {
      $array = explode(' ', $i);
      $messages = $array[0];
      $persons = $array[1];

      $word_array[$messages] = $persons;
  }

  $words = array_keys($word_array);
  $key = array_rand($words);

  $msg =  $words[$key];
  $person = $word_array[$msg];
  $title = '今日の一語';

  require_once dirname(__FILE__) . '/views/tpl_message.php';
