<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class SoracleController extends AppController{
  public function index(){
    $this->viewBuilder()->layout(false);
    $volts = TableRegistry::get('battery_volts')->find();
    $this->log($volts);
    foreach($volts as $v){
      $this->log($v->volts);
    }

    $this->render('index');
  }

  public function post(){
    $this->viewBuilder()->layout(false);

    $battery_volts = TableRegistry::get('battery_volts');
    $battery_volt = $battery_volts->newEntity();

    $query_data = $this->request->getQuery('data');

    if($query_data != Null){
      $battery_volt->volts = (int)$query_data;
      $battery_volt->created = new Time(date('Y-m-d H:i:s'));
      $battery_volt ->id = 1;

      $this->log($battery_volts);
      if($battery_volts->save($battery_volt)){
        $this->log('suc');
      }else{
        $this->log('fail');
      }
    }
    $this->render('post');
  }
}
?>
