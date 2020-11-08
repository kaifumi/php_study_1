<?php
  require_once dirname(__FILE__) . '/Item.php';

  $items = [];
  $items[] = new Item('圧力鍋', 6500);
  $items[] = new Item('電気ケトル', 3000);

  // Itemクラスが持っているプロパティと一致した名前を使って意味付けをしている
  $properties = [
    'name' => '商品名',
    'price' => '金額'
  ];

  // 動的アクセスを使って、プロパティ値を出力
  foreach ($items as $item) {
    foreach ($properties as $property => $label) {
      echo $label, ':', $item->{$property};
      // echo PHP_EOL;
      echo "<br>\n";
    }
  }
