<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Result</title>
    <style>
      body {
        padding: 30px;
      }
    </style>
  </head>
  <body>
    <h1><?php echo $title; ?></h1>
    <p>結果は<strong><?php echo $result; ?></strong>!!</p>
    <p><?= $pref_name ?>の県庁所在地は「<?= $pol_name ?>」ですね。</p>
    <p><a href="<?= $pref_url ?>" target="_blank"
          rel="noopener noreferrer">HPはこちら</a>
    <p></p>
    <a href="index.php">戻る</a>
  </body>
</html>
