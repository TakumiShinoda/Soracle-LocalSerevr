<html>
  <head>
    <?= $this->Html->css('soracle.css') ?>
  </head>
  <body>
    <h1>Soracle</h1>
    <hr>
    <div class='content'>
      <h3>現在の太陽光情報<h3>
      <p>バッテリー電圧: <?= $battery_volts->where(['id'=>$app_controller->getLastId($battery_volts)])->first()->volt ?>V</p>
    </div>
  </body>
</html>
