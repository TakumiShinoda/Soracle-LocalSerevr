<html>
  <head>
    <?= $this->Html->css('soracle.css') ?>
  </head>
  <body>
    <h1>Soracle</h1>
    <hr>
    <div class='content'>
      <h3>現在の太陽光情報<h3>
      <p>最新のバッテリー電圧: <?= $last_battery_volt ?>V</p>
      <p>バッテリー電圧一覧</p>
      <table border=1>
        <tr><th>電圧</th><th>時刻</th></tr>
        <?php foreach($battery_volts as $bv): ?>
          <tr>
            <td><?= $bv->volt ?></td>
            <td><?= $bv->created ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </body>
</html>
