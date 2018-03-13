<html>
  <head>
    <?= $this->Html->css('soracle.css') ?>
    <?= $this->Html->script('index.js') ?>
  </head>
  <body>
    <h1>Soracle</h1>
    <hr>
    <div class='content'>
      <h3>現在の太陽光情報<h3>
      <p>最新のバッテリー電圧: <?= $last_battery_volt ?>V</p>
      <p>バッテリー電圧一覧</p>
      <input class-"lists_switch" type="button" value="表示" onclick="display('battery_volts_table')">
      <input class-"lists_switch" type="button" value="隠す" onclick="hide('battery_volts_table')">
      <div class="battery_volts_table">
        <table border=1>
          <tr><th>電圧</th><th>時刻</th></tr>
          <?php foreach($battery_volts as $bv): ?>
            <tr>
              <td><?= $bv->volt ?></td>
              <td><?= $bv->created ?></td>
              <td><input type="button" value="削除" onclick="requestDelete(<?= $bv->id ?>)"></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </body>
</html>
