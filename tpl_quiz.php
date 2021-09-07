<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Quiz</title>
    <style>
      body {
        padding: 30px;
      }
    </style>
  </head>
  <body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $pref_name; ?>の県庁所在地は？</p>
    <p></p>
    <form action="answer.php" method="post">
      <input type="text" name="user_answer">

      <input type="hidden" name="pref_name"
      value="<?= $pref_name ?>">
      <input type="hidden" name="pol_name"
      value="<?= $pol_name ?>">
      <input type="hidden" name="pref_url"
      value="<?= $pref_url ?>">

      <button type="submit">送信</button>
    </form>
    <p></p>
    <a href="index.php">戻る</a>
  </body>
</html>
