<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $nums = [15, 4, 18, 23, 10];

    function sort_2way(&$array, $order = true) {
      if ($order) {
        echo "昇順でソートします。<br>";
        sort($array, SORT_NUMERIC);
      }else {
        echo "降順でソートします。<br>";
        rsort($array, SORT_NUMERIC);
      }
    }
    function show_array($array) {
      foreach ($array as $value) {
        echo "{$value}<br>";
      }
    }

    sort_2way($nums);
    show_array($nums);
    sort_2way($nums, false);
    show_array($nums);
    ?>
  </p>
</body>

</html>